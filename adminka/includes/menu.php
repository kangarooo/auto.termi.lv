<?php
//termi.lv
/////////////////////////////////////////////////////////////////
defined( '_V' ) or die( 'Restricted access' );
/////////////////////////////////////////////////////////////////

class Menu
{
	//navigation
	var $menu;
	//navigation with id key
	var $menuId;
	//active way
	var $active;
	//active link
	var $link;
	//other url
	var $other;
	//page title
	var $pageTitle;
	/////////////////////////////////////////////////////////////////////
	//parametrs
	//short friend url
	var $createSimple;
	//wrong urls
	var $created;

	//constructor
	function Menu($simply = false)
	{
		$this->createSimple = $simply;
	}
	// function creates pathway, returns array in keys is level and in value array of values
	// nice function, tested
	function create_path($menu, &$path)
	{
		if(empty($path))
		{
			$result[0] = reset($menu[0]);
			$this->created = 0;
		}
		$component = true;
		$limit = 10;
		$search = true;
		$level = 0;
		$parent = 0;
		while ($component && !empty($path))
		{
			$this->created = 0;
			if (($level > $limit))
			{
				break;
			}
			if (isset($path[$level]) && $search && isset($menu[$parent]))
			{
				foreach($menu[$parent] as $item)
				{
					if($this->createSimple)
					{
						if ($item['id'] == $path[$level])
						{
							$result[$level] = $item;
						}
					}
					else
					{
						if ($item['friend_url'] == $path[$level])
						{
							$result[$level] = $item;
						}
					}
				}
			}
			// create default item, if previous have not componet
			if (empty($result[$level]))
			{
				//
				if (!empty($result[$level - 1]['component']))
				{
					break;
				}
				if (isset($menu[$parent]))
				{
					$result[$level] = reset($menu[$parent]);
					$search = false;
					$this->created = $level;
				}
				else
				{
					break;
				}
			}
			else
			{
				unset($path[$level]);
			}
			$component = empty($result[$level]['component']) | $search;
			$parent = $result[$level]['id'];
			$level++;
		}
		return $result;
	}
	//////////////////////////////////////////////////////////////////////////////////////////////////
	function remove_last($array)
	{
		$nav = false;
		if(empty($array))
		{
			return $nav;
		}
		$lastItem = array_pop($array);
		foreach($array as $key=>$item)
		{
			$nav[] = $item;
		}
		if(!empty($lastItem))
		{
			$nav[] = $lastItem;
		}
		return $nav;
	}
	//////////////////////////////////////////////////////////////////////////////////////////////////
	//function reads friend url arguments
	function friend_url($string)
	{
		//$string = substr($string, -1) == '/' ? substr($string, 0, -1) : $string;
		$result = $this->remove_last(explode('/', str_replace('.html' , '/', $string)));
		return $result;
	}
	//////////////////////////////////////////////////////////////////////////////////////////////////
	//menu of all links; active - with all active links read from friendly url; and other, stayies from friend urls
	function create($url, $menu_base = false)
	{
		//echo $url; die;
		global $db;
		if(substr($url, -1)!='/'&&strpos(end(explode('/', $url)), '.')){
				$this->extension = end(explode('.', $url));
				$url = substr($url, 0, strlen($url)-strlen($this->extension)-1);
		} else {
				$this->extension = '';
		}
		$path_url = $this->friend_url($url);
		//dmp($path_url);
		$menu_base = $menu_base ? $menu_base : $db->sqla("
			SELECT
				`id`, `name`, `parent_id`, `ordering`, `friend_url`, `component`, `template`, `type`, `params`
			FROM
				`#__menu`
			WHERE
				`published`='1'
			ORDER BY
				`parent_id` ASC, `ordering` ASC
			", 'parent_id');
//		dmp($menu_base); die;
		$path = $this->create_path($menu_base, $path_url);
		$this->menu = $menu_base;
		$this->menuId = reorder($menu_base, 'id');
		$this->active = $path;
		$this->link = end($this->active);
		$this->link['componentUrl'] = $this->path_way('/');
		//set default template
		$this->link['template'] = empty($this->link['template']) ? 'main' : $this->link['template'];
		$this->link['params'] = unserialize($this->link['params']);
		$this->pageTitle = $this->link['name'];
		$this->other = $this->remove_last($path_url);
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// create path way
	function path_way($defe = '', $endLink = '/', $names = false)
	{
		global $wwwLink;
		$arr = $this->active;
		$href = $wwwLink;
		$sum = count($arr);
		if ($sum < 1)
		{
			return;
		}
		if (empty($defe))
		{
			?>

			<ul>
				<li><a title="<?php echo lng('site_name');?>" href="<?php echo $href;?>/"><?php echo lng('site_name');?></a></li><?php
					for ($i = 0; $i < $sum; $i++){
						$href .= '/' . (empty($arr[$i]['friend_url']) ? '' : $arr[$i]['friend_url']);
						?>

						<li><a title="<?php echo $arr[$i]['name'];?>" href="<?php echo $href . $endLink;?>"><?php echo $arr[$i]['name'];?></a></li><?php
					}
				?>

			</ul><?php
			return;
		}
		$href = $names ? '' : $href;
		for ($i = 0; $i < $sum; $i++)
		{
			$href .= $defe . ($names ? $arr[$i]['name'] : $arr[$i]['friend_url']);
		}
		return $href;
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function set_title($t)
	{
		$this->pageTitle = $t;
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function last_title()
	{
		return $this->pageTitle;
	}
	function drop_menu($parent = 0, $params = 'a', $level = 0, $subMenu = true, $endLink = '/', $possibleType = array('s', 'm'), $class='', $ul_class = '')
	{
		$var = $this->menu;
		$active = $this->active;
		$levelCount = 0;
		$depth = array_depth($var);

		$href = $this->create_link($parent, false, '', false);
		// here goes multi menu
		if ($depth == 3)
		{
			if (empty($var[$parent]))
			{
				return;
			}
			$counter = 0;
			foreach ($var[$parent] as $item)
			{
				if (in_array($item['type'], $possibleType))
				{
					$counter++;
					echo ($counter==1 ? '<ul'.($ul_class!='' ? ' class="'.$ul_class.'"' : '').'>' : '');
					$list_active = (isset($active[$level]['id']) && !empty($params) && $item['id'] == $active[$level]['id'] ? ($class!='' ? ' class="'.$class.'"' : '').' id="'.$params . $level.'"' : '');
					$menu_name = $item['name'];
					$friendUrl = $item['friend_url'];
					$linkItemHref = $href.'/'.$friendUrl.('redirect'==$item['component'] ? '/'.$var[$item['id']][0]['friend_url'] : '').$endLink;
					?><li<?php echo $list_active;?>><a title="<?php echo $menu_name;?>" href="<?php echo $linkItemHref ?>"><?php echo $menu_name;?></a><?php
					if (isset($item['id']) && isset($var[$item['id']]) && $subMenu)
					{
						$this->drop_menu($item['id'], $params, $level + 1, $subMenu, $endLink, $possibleType, $class);
					}
					?></li><?php
				}
			}
			echo ($counter>0 ? '</ul>' : '');
		}
	}
	//
	public function getMenu($parent = 0, $endLink = '/', $possibleType = array('s', 'm'))
	{
		if (empty($this->menu[$parent])){
			return false;
		}
		$menu = array();
		$href = $this->create_link($parent, false, '', false);
		foreach ($this->menu[$parent] as $item){
			if (in_array($item['type'], $possibleType)){
				$menu[] = array(
					'id'=>$item['id']
					, 'name'=>$item['name']
					, 'url'=>$href.'/'.$item['friend_url'].('redirect'==$item['component'] ? '/'.$this->menu[$item['id']][0]['friend_url'] : '').$endLink
					, 'type'=>$item['type']
					, 'child'=>$this->getMenu($item['id'], $endLink, $possibleType)
				);
			}
		}
		return $menu;
	}
	public function getActive()
	{
		$a = array();
		foreach($this->active as $value){
			$a[]=$value['id'];
		}
		return $a;
	}
	// function create link for given id of menu
	function create_link($id, $other_name = false, $end_of_link = '', $print = true)
	{
		global $wwwLink;
		$allMenuId = $this->menuId;
		$createSimple = $this->createSimple;
		if (empty($allMenuId[$id][0]))
		{
			return $wwwLink;
		}
		$get_href = $allMenuId[$id][0];
		$href = '/' . (!empty($get_href['friend_url']) ? $get_href['friend_url'] : '');
		$a = 0;
		while(($get_href['parent_id']!=0) && ($a < 10))
		{
			$get_href = $allMenuId[$get_href['parent_id']][0];
			 $href = '/' . (!empty($get_href['friend_url']) ? $get_href['friend_url'] : '') . $href;
			$a ++;
		}
		if (isset($allMenuId[$id][0]))
		{
			$active = $allMenuId[$id][0];
			$other_name = empty($other_name) ? $active['name'] : $other_name;
			if($print)
			{
				?><a<?php echo ' title="'.$other_name.'"';?> href="<?php echo $wwwLink . $href . $end_of_link;?>"><?php echo $other_name;?></a><?php
			}
			else
			{
				return $wwwLink . $href . $end_of_link;
			}
		}
	}
	function getExtension(){
			return $this->extension;
	}
}