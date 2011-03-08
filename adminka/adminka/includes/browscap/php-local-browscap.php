<?php
$browscapIni=null; //Cache
$browscapPath=''; //Cached database

function _sortBrowscap($a,$b)
{
 $sa=strlen($a);
 $sb=strlen($b);
 if ($sa>$sb) return -1;
 elseif ($sa<$sb) return 1;
 else return strcasecmp($a,$b);
}

function _lowerBrowscap($r) {return array_change_key_case($r,CASE_LOWER);}

function get_browser_local($user_agent=null,$return_array=false,$db='php_browscap.php',$cache=false)
{//http://alexandre.alapetite.net/doc-alex/php-local-browscap/
 if (($user_agent==null)&&isset($_SERVER['HTTP_USER_AGENT'])) $user_agent=$_SERVER['HTTP_USER_AGENT'];
 global $browscapIni;
 global $browscapPath;
 if ((!isset($browscapIni))||(!$cache)||($browscapPath!==$db))
 {
  $browscapIni=parse_ini_file($db,true); //Get php_browscap.ini on http://browsers.garykeith.com/downloads.asp
  $browscapPath=$db;
  uksort($browscapIni,'_sortBrowscap');
  $browscapIni=array_map('_lowerBrowscap',$browscapIni);
 }
 $cap=null;
 foreach ($browscapIni as $key=>$value)
 {
  if (($key!='*')&&(!array_key_exists('parent',$value))) continue;
  $keyEreg='^'.str_replace(
   array('\\','.','?','*','^','$','[',']','|','(',')','+','{','}','%'),
   array('\\\\','\\.','.','.*','\\^','\\$','\\[','\\]','\\|','\\(','\\)','\\+','\\{','\\}','\\%'),
   $key).'$';
  if (preg_match('%'.$keyEreg.'%i',$user_agent))
  {
   $cap=array('browser_name_regex'=>strtolower($keyEreg),'browser_name_pattern'=>$key)+$value;
   $maxDeep=8;
   while (array_key_exists('parent',$value)&&(--$maxDeep>0))
    $cap+=($value=$browscapIni[$value['parent']]);
   break;
  }
 }
 if (!$cache) $browscapIni=null;
 return $return_array ? $cap : (object)$cap;
}
?>