<?php
defined( '_V' ) or die( 'Restricted access' );
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Class Translate
{
	var $_db;
	var $languages;
	var $refresh_after_insert=false;
	var $translations;
	var $activeLang=0;
	var $translateList = false; //very paintful for mysql requests
	function Translate($db, $tr, $uId=0)
	{
		$this->_db=$db;
		$this->translations=$tr;
		$this->userEditing=$uId;
	}
	//////////////////////////////////////////////////////////////////////////
	function load_languages()
	{
		$this->languages = $this->_db->sqla("
			SELECT
				`id`, `name`, `friend_url`
			FROM
				`#__languages`
			WHERE
				`published`='1' AND `default`='0'
			ORDER BY
				`ordering`
			", 'friend_url', true);
		//dmp($this->languages);
	}
	//////////////////////////////////////////////////////////////////////////
	function load_component_items()
	{
		$viewFields = $this->translations[$this->activeComponent]['view_fields'];
		array_walk($viewFields, 'prefix_key_compare_item', array('i', ' AS ', true));
		if(array_key_exists('ordering', $this->translations[$this->activeComponent]))
			array_walk($this->translations[$this->activeComponent]['ordering'], 'prefix_key_compare_item', 'i');
		if(array_key_exists('where', $this->translations[$this->activeComponent]))
			array_walk($this->translations[$this->activeComponent]['where'], 'prefix_key_compare_item', array('i', '='));
		$this->component_items = $this->_db->sqla("
			SELECT
				".implode(', ', $viewFields)."
				,i.`id` AS item_id
				,COUNT(l.`id`) AS translated
			FROM
				`#__".$this->translations[$this->activeComponent]['table']."` AS i
			LEFT JOIN
				`#__jf_content` AS l
			ON
				l.`language_id`='".$this->activeLang."' AND l.`reference_id`=i.`id` AND l.`reference_table`='".$this->translations[$this->activeComponent]['table']."' AND  l.`reference_field` IN (".implode(', ', array_map("convert_to_string_mysql", array_keys($this->translations[$this->activeComponent]['edit_fields']))).")
			".(array_key_exists('where', $this->translations[$this->activeComponent]) ? "WHERE " . implode(' AND ', $this->translations[$this->activeComponent]['where']) : '')."
			GROUP BY
				i.`id`
			".(array_key_exists('ordering', $this->translations[$this->activeComponent]) ? "ORDER BY " . implode(',', $this->translations[$this->activeComponent]['ordering']) : '')."
		");
		if($this->translateList){
				foreach($this->component_items as $key=>$item){
						if($item['translated']>0){
								foreach(array_keys($this->translations[$this->activeComponent]['edit_fields']) as $f){
									if(array_key_exists($f, $item)){
											$newValue = $this->_db->sqlf1("
												SELECT
														`value`
												FROM
														`#__jf_content` AS l
												WHERE
														l.`language_id`='".$this->activeLang."' AND l.`reference_id`='".$item['id']."' AND l.`reference_table`='".$this->translations[$this->activeComponent]['table']."' AND  l.`reference_field`='".$f."'
												LIMIT
														1
												");
											if(!empty($newValue)){
												$this->component_items[$key][$f]=$newValue;
											}
									}
								}
						}
				}
		}
	}
	//////////////////////////////////////////////////////////////////////////
	function load_component_one_item($id)
	{
		$this->iditingItemdId = $id;
		$editFields = $selectEditFields = array_keys($this->translations[$this->activeComponent]['edit_fields']);
		array_walk($selectEditFields, 'prefix_key_compare_item', array('i', ' AS ', true));
		$tempResult = $this->_db->sql1("
			SELECT
				".implode(', ', $selectEditFields)."
				,i.`id` AS item_id
			FROM
				`#__".$this->translations[$this->activeComponent]['table']."` AS i
			WHERE
				i.`id`='$id'
		");
		if(empty($tempResult))
			return false;
		$tempResultQuery = $this->_db->sqla("
			SELECT
				l.`reference_field`, l.`value`
			FROM
				`#__jf_content` AS l
			WHERE
				l.`language_id`='".$this->activeLang."' AND l.`reference_id`='$id' AND l.`reference_table`='".$this->translations[$this->activeComponent]['table']."' AND  l.`reference_field` IN (".implode(', ', array_map("convert_to_string_mysql", $editFields)).")
		");
		//dmp($tempResultQuery); die;
		$translatedFields = array();
		if(!empty($tempResultQuery) && count($tempResultQuery)>0)
			foreach($tempResultQuery as $rowTranslated)
				$translatedFields[$rowTranslated['reference_field']] = $rowTranslated['value'];



		$this->component_one_item['r']=$tempResult;
		$this->component_one_item['t']=$translatedFields;
	}
	//////////////////////////////////////////////////////////////////////////
	function update_component_one_item()
	{
		$showUpdate = array();
		foreach($this->translations[$this->activeComponent]['edit_fields'] as $f)
		{
			$getChanged = arg($f['name']);
			if(array_key_exists('function', $f))
				switch($f['function'])
				{
					case 'esc_html':
						$getChanged = esc_html($getChanged);
					break;
				}
			//lets check for changes
			$update = false;
			if(array_key_exists($f['name'], $this->component_one_item['t']))
			{
				if($getChanged != $this->component_one_item['t'][$f['name']])
				{
					$this->_db->squp("
					UPDATE
						`#__jf_content`
					SET
						`modified`=NOW(), `modified_by`='".$this->userEditing."'
						, `original_value`='".$this->_db->sqst($this->component_one_item['r'][$f['name']])."'
						, `value`='".$this->_db->sqst($getChanged)."'
					WHERE
						`language_id`='".$this->activeLang."' AND `reference_id`='".$this->iditingItemdId."' AND `reference_table`='".$this->translations[$this->activeComponent]['table']."' AND `reference_field`='".$f['name']."'
					");
					$update = true;
				}
			}
			else
			{
				$this->_db->sqin("
				INSERT INTO
					`#__jf_content`
					(`language_id`, `reference_id`, `reference_table`, `reference_field`, `value`, `original_value`, `modified`, `modified_by`, `published`)
				 VALUES
					('".$this->activeLang."', '".$this->iditingItemdId."', '".$this->translations[$this->activeComponent]['table']."', '".$f['name']."', '".$this->_db->sqst($getChanged)."', '".$this->_db->sqst($this->component_one_item['r'][$f['name']])."', NOW(), '".$this->userEditing."', '1')
				");
				$update = true;

			}
			if($update)
			{
				$this->component_one_item['t'][$f['name']] = $getChanged;
				$showUpdate[]=lng('value of')." <strong>".lng($f['name'])."</strong> ".lng('updated');
			}

		}
		return implode(', ', $showUpdate);
	}
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	function check_language($l)
	{
		return array_key_exists($l, $this->languages);
	}
	//////////////////////////////////////////////////////////////////////////
	function set_language($l)
	{
		$this->activeLang=$this->languages[$l]['id'];
	}
	//////////////////////////////////////////////////////////////////////////
	function get_languages()
	{
		return $this->languages;
	}
	//////////////////////////////////////////////////////////////////////////
	function get_translations()
	{
		return $this->translations;
	}
	//////////////////////////////////////////////////////////////////////////
	function check_component($c)
	{
		return array_key_exists($c, $this->translations);
	}
	//////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	function set_component($c)
	{
		$this->activeComponent=$this->translations[$c]['table'];
	}
	function get_component_items()
	{
		return $this->component_items;
	}
	//////////////////////////////////////////////////////////////////////////
	function get_component_one_item()
	{
		return $this->component_one_item;
	}
	//////////////////////////////////////////////////////////////////////////
	function get_component_params()
	{
		return $this->translations[$this->activeComponent];
	}


}
////////////////////////////////////////////////////////////////////////////

$errorPage = false;
require_once ($absolutePathAdmin.'/config/translate.php');
$translate = new Translate($db, $translateConfig, $log->userSession['u_id']);
$translate->load_languages();
$activeLang = false;
$activeComponent = false;
if(isset($menu->other[0]))
{
	if($translate->check_language($menu->other[0]))
	{
		$translate->set_language($menu->other[0]);
		$tmpLanguages=$translate->get_languages();
		$menu->active[]=array('friend_url'=>$menu->other[0], 'name'=>$tmpLanguages[$menu->other[0]]['name']);
		unset($tmpLanguages);
		$activeLang = $menu->other[0];

	}
	else
		$errorPage = true;
}


if(!$errorPage && isset($menu->other[1]))
{
	if($translate->check_component($menu->other[1]))
	{
		$translate->set_component($menu->other[1]);
		$tmpComponent=$translate->get_translations();
		$menu->active[]=array('friend_url'=>$menu->other[1], 'name'=>$tmpComponent[$menu->other[1]]['name']);
		unset($tmpComponent);
		$activeComponent = $menu->other[1];
	}
	else
		$errorPage = true;
}
if(!$errorPage && isset($menu->other[2]))
{
	$translate->load_component_one_item($menu->other[2]);
	if(arg('action')=='update-element')
		$updatedElements = $translate->update_component_one_item();
	$tempItem = $translate->get_component_one_item();
	$menu->active[]=array('friend_url'=>$menu->other[2], 'name'=>reset($tempItem['r']));
	unset($tempItem);
}
elseif(!$errorPage && $activeComponent)
{
	$translate->load_component_items();
}
