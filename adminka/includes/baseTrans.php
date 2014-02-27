<?php
//termi.lv
/////////////////////////////////////////////////////////////////
defined( '_V' ) or die( 'Restricted access' );
/////////////////////////////////////////////////////////////////
//escape for mysql strings
function mysqlEscapeStringOnSelect($v)
{
	return "'$v'";
}

/////////
class MysqlMultiLanguage extends Mysql
{
	/** @var array list of multi lingual tables */
	var $_mlTableList=null;
 	/** @var Internal variable to hold array of unique tablenames and mapping data*/
	var $_refTables=null; 
	var $_sql=null;
	var $translateContent=true;
	var $languageAvailable=array();
	var $language=0;
	
	function __construct($host,$user,$pass,$dbName,$fix){
		parent::__construct($host,$user,$pass,$dbName,$fix);
		//$this->language=2;
		$query = "
			SELECT
				distinct `reference_table`
			FROM
				#__jf_content";
		$this->set_translation(false);
		$this->_mlTableList = $this->sqla($query, null, true);
		$query = "
			SELECT
				`id`, `friend_url`, `default`
			FROM
				#__languages
			WHERE
				`published`='1'
			ORDER BY
				`ordering`
			";
		$this->set_translation(false);
		$this->languageAvailable = $this->sqla($query, 'friend_url', true);
		//dmp($this->languageAvailable);
		//dmp($this->_mlTableList);
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function set_language($url='en')
	{
	   if(isset($this->languageAvailable[$url])) {
		   if(empty($this->languageAvailable[$url]['default'])){
//			   setcookie("lng", $this->languageAvailable[$url]['friend_url'], $cookieUniqueTime, '/');
//			   $_COOKIE['lng'] = $this->languageAvailable[$url]['friend_url'];
			   $this->language=$this->languageAvailable[$url]['id'];
		   } else {
		   }
	   } else {
			return false;
	   }
	   return true;
		   
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        function get_language_id(){
            foreach($this->languageAvailable as $url=>$params){
                if($params['id']==$this->language){
                    return $url;
                }
            }
            foreach($this->languageAvailable as $url=>$params){
                if(!empty($params['default'])){
                    return $url;
                }
            }
            return 'en';
        }
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function get_language()
	{
//		dmp($_COOKIE['lng']);
//		if(isset($_COOKIE['lng'])){
//			$lng = $_COOKIE['lng'];
//			if(isset($this->languageAvailable[$lng])&&$this->languageAvailable[$lng]['id']!=$this->language){
//				return $lng;
//			}
//		}
//		return false;

	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function set_translation($set=false)
	{
		$this->translateContent=$set;
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//translate only SELECT queries
	function self_fetch_assoc($translate=true)
	{
		$result=parent::self_fetch_assoc();
		if(!$this->translateContent | !$translate | empty($this->language)){
			$this->set_translation(true);
			return $result;
		}
		
		if(!$this->setRefTables())
			return $result;

		//dmp($this->_refTables);
		if(!$this->refTablesIndexing())
			return $result;
		$this->loadActiveIds($result);
		//create translate query and execute, so old string query fold down, but we don't need it any more
		$translateData=$this->createTranslateQuery();
		//no data loaded from base
		if(empty($translateData) | count($translateData)==0)
			return $result;
		$this->translateDataFormat($translateData);
		$this->translateByIds($translateData, $result);
		//dmp($this->queryString);
		//dmp($this->queryList);
		//dmp($result);
		return $result;
	}
	///////////////////////////////////////////////////////////////////////////////////////
	//format translate data
	function translateDataFormat(&$translateData)
	{
		foreach($translateData as $d){
			$formatedData[$d['reference_table']][$d['reference_field']][$d['reference_id']]=$d['value'];
		}
		$translateData=$formatedData;
	}
	///////////////////////////////////////////////////////////////////////////////////////
	//translate by ids
	function translateByIds($translateData, &$originalData)
	{
		foreach($originalData as $key=>$d)
			foreach($this->queryList['idsName'] as $table=>$id)
				if(isset($translateData[$table]))
					foreach($this->queryList['rows'][$table] as $field)
						if(isset($translateData[$table][$field]))
							if(isset($translateData[$table][$field][$d[$id]]))
								$originalData[$key][$this->tableFieldAlias[$table][$field]['fieldNameAlias']]=$translateData[$table][$field][$d[$id]];
	}
	
	//create translate query
	function createTranslateQuery()
	{
	   $qStrWhere=array();
		foreach($this->queryList['rows'] as $table=>$rows)
		{
			//dmp(array_map("mysqlEscapeStringOnSelect", $rows));
			if(!empty($this->queryList['ids'][$table]))
				$qStrWhere[]="
					(
						`reference_id` IN (".implode(',', $this->queryList['ids'][$table]).")
						AND `reference_table`='$table'
						AND `reference_field` IN (".implode(', ', array_map("mysqlEscapeStringOnSelect", $rows)).") 
					)
				";
		}
		if(empty($qStrWhere))
		{
			return false;
		}
		$this->queryString="
			SELECT
				`reference_id`, `reference_table`, `reference_field`, `value`
			FROM
				`#__jf_content`
			WHERE
				(".implode(' OR ', $qStrWhere).")
				AND `published`='1'
				AND `language_id`='$this->language'
		";
		return $this->self_fetch_assoc(false);
	}
	///////////////////////////////////////////////////////////////////////////////////////
	//loads active ids
	function loadActiveIds($rows)
	{
	   //echo 'iiii';
	   //dmp($rows);
	   //dmp($this->queryList);

		foreach($rows as $row)
			if(isset($this->queryList['idsName']))
				foreach($this->queryList['idsName'] as $table=>$idName)
					$this->queryList['ids'][$table][$row[$idName]]=$row[$idName];
	}
	///////////////////////////////////////////////////////////////////////////////////////
	function refTablesIndexing()
	{
		if(count($this->_refTables)==0)
			return false;
		$tableFieldAlias = array();
		foreach($this->_refTables as $alias)
		{
			if(in_array($alias['tableName'], $this->_mlTableList))
				$tableFieldAlias[$alias['tableName']][$alias['fieldName']]=$alias;
		}
		//dmp($tableFieldAlias);
		//dmp(empty($tableFieldAlias));
		if(empty($tableFieldAlias))
			return false;
		$queryList = array();
		foreach($tableFieldAlias as $table=>$field)
		{
			if(!empty($field['id']))
			{
				$queryList['tables'][$table]=$table;
				$queryList['idsName'][$table]=$field['id']['fieldNameAlias'];
			}
			foreach(array_keys($field) as $row)
				//dmp($field[$row]['fieldNameAlias']);
				if($row!='id')
				{
					$queryList['rows'][$table][$row]=$row;
					//$queryList['rows'][$table][$row]=$row;
				}
		}
		$this->queryList=$queryList;
		$this->tableFieldAlias=$tableFieldAlias;
		//echo 'queryLIst';
		//dmp($queryList); 
		return true; 
	}
	///////////////////////////////////////////////////////////////////////////////////////
	function setRefTables()
	{
		$tempsql = $this->queryString;
		// only needed for selects at present - possibly add for inserts/updates later
		if (strpos(strtoupper($tempsql),"SELECT")===false) {
			return false;
		}
		$fields = mysql_num_fields($this->lastResource);
		if ($fields<=0) {
			return false;
		}
		$this->_refTables=array();
		// local variable to keep track of aliases that have already been analysed
		$tableAliases = array();
		//dmp($tempsql);
		for ($i = 0; $i < $fields; ++$i) {
		  	$meta = mysql_fetch_field($this->lastResource, $i);
			if (!$meta) {
				echo "No information available<br />\n";
			}
			else {
				$tempTable =  $meta->table;
				// if I have already found the table alias no need to do it again!
				if (array_key_exists($tempTable,$tableAliases)){
					$value = $tableAliases[$tempTable];
				}
				else {
					if (!isset($tempTable) || strlen($tempTable)==0) {
						continue;
					}
					//echo "<br>Information for column $i of ".($fields-1)." ".$meta->name." : $tempTable=";
					$tempArray=array();
					$prefix = $this->dbFix;
					
					preg_match_all("/`$prefix(\w*)`\s+AS\s+".$tempTable."[,\s]/i",$this->queryString, $tempArray, PREG_PATTERN_ORDER);
					if (count($tempArray)>1 && count($tempArray[1])>0) $value = $tempArray[1][0];
					   else $value = null;
					if (isset($this->dbFix) && strlen($this->dbFix)>0 && strpos($tempTable,$this->dbFix)===0)
						$tempTable = substr($tempTable, strlen( $this->dbFix));
					$value = $value?$value:$tempTable;
					$tableAliases[$tempTable]=$value;
				}
				//dmp($tableAliases);
				
				if (strpos($value,"jf_")===false){
					/// ARGH !!! I must also look for aliases for fieldname !!
					$tempName = $meta->name;
					$tempArray=array();
					preg_match_all("/`(\w*)`\s+AS\s+".$tempName."[,\s]/i",$this->queryString, $tempArray, PREG_PATTERN_ORDER);
					if (count($tempArray)>1 && count($tempArray[1])>0) {
						//echo "$meta->name is an alias for ".$tempArray[1][0]."<br>";
						$nameValue = $tempArray[1][0];
					}
					else $nameValue = $meta->name;

					// Put all the mapping data together so that everything is in sync and I can check fields vs aliases vs tables in one place
					$this->_refTables[$i]=array("fieldNameAlias"=>$meta->name, "fieldName"=>$nameValue,"tableNameAlias"=>$meta->table,"tableName"=>$value);
				}
				
			}
		}
		return true;
	}
	//////////////////////////////////////////////////////////////////////////////
}