<?php
//termi.lv
/////////////////////////////////////////////////////////////////
defined( '_V' ) or die( 'Restricted access' );
/////////////////////////////////////////////////////////////////
function __autoload($class_name) {
	global $absolutePath;
	require_once $absolutePath . '/includes/classes/'.$class_name . '.php';
}
/////////////////////////////////////////////////////////////////
function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }
    return false;
}
/////////////////////////////////////////////////////////////////
function lng($arg, $transArg = null){
	global $lang;
	if (isset($lang[$arg])){
		$translate = $lang[$arg];
	} else {
		$translate = $arg;
	}
	if(!empty($transArg)){
		foreach($transArg as $id=>$value){
			$translate = str_replace($id, $value, $translate);
		}
	}
	return $translate;
}
/////////////////////////////////////////////////////////////////
//include module
function mod($name)
{
	global $absolutePath;
	if (!empty($name) && file_exists($absolutePath.'/includes/modules/'.$name.'.php'))
	{
		require_once ($absolutePath.'/includes/modules/'.$name.'.php');
	}
}
//////////////////////////////
 // function gets rondom string
function random_string($l = 16, $normal = false)
{
	// Register the lower case alphabet array
	$alpha = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
				   'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
	$alphaextra = array('=', '?', '@', '(', ')', '-', '+', '_');
	// Register the upper case alphabet array
	$ALPHA = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
					 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

	// Register the numeric array
	$num = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
   
	// Initialize the keyVals array for use in the for loop
	$keyVals = array();
   
	// Initialize the key array to register each char
	if($normal)
	{
	$key = array();
			$keyVals = array_merge($alpha, $ALPHA, $num);
	}
	else
	{
	$key = array();
			$keyVals = array_merge($alpha, $ALPHA, $num, $alphaextra);
	}
	// Loop as many times as specified
	// Register each value to the key array
	for($i = 0; $i <= $l-1; $i++)
	{
		$r = mt_rand(0,count($keyVals)-1);
		$key[$i] = $keyVals[$r];
	}
   
	// Glue the key array into a string and return it
	return join("", $key);
}
// check for valid email address
function valid_email($email)
{
	$atom='[-a-z0-9!+=^_`{|}~]';				// allowed characters for part before "at" character. original: '[-a-z0-9!#$%&\'*+/=?^_`{|}~]'
	$domain='([a-z0-9]([-a-z0-9]*[a-z0-9]+)?)'; // allowed characters for part after "at" character
	$regex='^'.$atom.'+'.					   // One or more atom characters.
	'(\.'.$atom.'+)*'.						  // Followed by zero or more dot separated sets of one or more atom characters.
	'@'.										// Followed by an "at" character.
	'('.$domain.'{1,63}\.)+'.				   // Followed by one or max 63 domain characters (dot separated).
	$domain.'{2,6}'.							// Must be followed by one set consisting a period of two
	'$';										// or max 6 domain characters.
	return (eregi($regex,$email) && (strlen(stripslashes($email))<=255));
}
// check for valid email address
function valid_file($f)
{
	$name='([a-z0-9])';
	$regex='^'. '('.$name.'{1,63})$';
	return (eregi($regex,$f));
}

// function reads get data
function GET($name){
	if(!array_key_exists($name, $_GET)){
		return false;
	}
	return is_array($_GET[$name]) ? $_GET[$name] : trim($_GET[$name]);
}
// function reads get data
function POST($name){
	if(empty($_POST[$name])){
		return false;
	}
	return is_array($_POST[$name]) ? $_POST[$name] : trim($_POST[$name]);
}
// function get session
function SES($name){
	if(empty($_SESSION[$name])){
		return false;
	}
	return is_array($_SESSION[$name]) ? $_SESSION[$name] : trim($_SESSION[$name]);
}
// lets refresh
function refresh($url = false)
{
	global $wwwLink;
	if (empty($url))
	{
		$url = $wwwLink.'/';
	}
	header("Location: $url");
	die;
}
// function reorder readed array from base
function reorder($array, $order, $keys = false)
{
	foreach ($array as $sub_array)
	{
		foreach ($sub_array as $el_array)
		{
			if($keys)
			{
				$new_array[$el_array[$order]] = $el_array;
			}
			else
			{
				$new_array[$el_array[$order]][] = $el_array;
			}
		}
	}
	return $new_array;
}

// function to get microtime
function mc_time()
{
	list($usec, $sec) = explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}
//get array depth
function array_depth($var)
{
	$max_depth = 10;
	$depth = 0;
	while (is_array($var) && ($depth < $max_depth))
	{
		$var_sub = $var;
		unset($var);
		$var = reset($var_sub);
		$depth++;
	}
	return $depth;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function esc_html($str)
{
	return htmlspecialchars($str);
}
/////////////////////////////////////////////////////////////////////////////////////

// function to print out variable values
function dmp($val, $hidden = false)
{
	if ($hidden){
		echo "<!--\n";
		var_dump($val);
		echo "\n-->";
	} else {
		echo "\n<pre style='text-align: left;'>\n";
		var_dump($val);
		echo "\n</pre>\n";
	}
}
////////////////////////////////////////////////////////////////////
//function dateToText($date, $short = 2, $delimiter = ', '){
//	$t1=!$date ? time() : strtotime($date);
//	$t2=time();
//	$prefix = lng('Before');
//	if($t1 > $t2){
//		$time1 = $t2;
//		$time2 = $t1;
//		$prefix = lng('Until');
//	} else {
//		$time1 = $t1;
//		$time2 = $t2;
//	}
//	$difference = array();
//	foreach(array(
//		'years','months','weeks','days','hours','minutes','seconds'
//	) as $unit){
//		$value = 0;
//		while(TRUE){
//			$next = strtotime("+1 $unit", $time1);
//			if($next < $time2){
//				$time1 = $next;
//				$value++;
//				$diff[$unit]++;
//			} else {
//				break;
//			}
//		}
//		if($value>0){
//			$difference[]=$value.' '.lng((substr($value, -1)==1 && $value!=11) ? substr($unit, 0, -1) : $unit);
//			$short--;
//			if($short<=0){
//				break;
//			}
//		}
//	}
//	if(count($difference)<=0){
//		$difference[] = lng('some time');
//	}
//	return $prefix.' '.implode($delimiter, $difference);
//}
////////////////////////////////////////////////////////////////////
function formatPages($n, $link = '', $end = '')
{
	list($active, $total) = $n;
	if($total<=1){
		return false;
	}
	$limit = 2;
	$links = array();
	if($active!=1){
		$links[] = array(
			'url'=>$link.($active-1).$end
			, 'name'=>lng('Previous'). '...'
			, 'class'=>'prevPage'
		);
	}
	for($i = ($active-$limit<1 ? 1 : $active-$limit); $i<=($active+$limit>$total ? $total : $active+$limit); $i++){
		$links[] = array(
			'url'=>$link.($i).$end
			, 'name'=>$i
			, 'class'=>$active==$i ? 'active' : ''
		);
	}
	if($active!=$total){
		$links[] = array(
			'url'=>$link.($active+1).$end
			, 'name'=>'...'.lng('Next')
			, 'class'=>'nextPage'
		);
	}
	return $links;
}
////////////////////////////////////////////////////////////////////
function formatText($str)
{
	$str = esc_html($str);
	$str = str_replace("\n\n", "\n", $str);
	$str = '<p>'.str_replace("\n", "</p>\n<p>", $str).'</p>';
	return $str;
}
////////////////////////////////////////////////////////////////////
function mailto($m,$topic,$text)
{
        global $phpMail, $smtpServer;
        $mail = new PHPMailer();
        if(!empty($smtpServer)){
                $mail->IsSMTP();
                $mail->Host     = $smtpServer;
                $mail->SMTPAuth = false;
        } else {
                $mail->IsMail();
        }
        $mail->SetFrom($phpMail, lng('site_name'));
        $mail->Subject = $topic;
        $mail->AltBody = strip_tags($text);
        $mail->MsgHTML($text);
        $mail->AddAddress($m, $m);
        if(!$mail->Send()){
                return $mail->ErrorInfo;
        }
        return false;
}
////////////////////////////////////////////////////////////////////
function nameToFurl($name){
    $def='-';
    $pairs = array(
	    'Ā' => 'A',
	    'Č' => 'C',
	    'Ē' => 'E',
	    'Ģ' => 'G',
	    'Ī' => 'I',
	    'Ķ' => 'K',
	    'Ļ' => 'L',
	    'Ņ' => 'N',
	    'Š' => 'S',
	    'Ū' => 'U',
	    'Ž' => 'Z',
	    'Ō' => 'O',
	    'Ŗ' => 'r',

	    'ā' => 'a',
	    'č' => 'c',
	    'ē' => 'e',
	    'ģ' => 'g',
	    'ī' => 'i',
	    'ķ' => 'k',
	    'ļ' => 'l',
	    'ņ' => 'n',
	    'š' => 's',
	    'ū' => 'u',
	    'ž' => 'z',
	    'ō' => 'o',
	    'ŗ' => 'r',

	    'А' => 'A',
	    'Б' => 'B',
	    'В' => 'V',
	    'Г' => 'G',
	    'Д' => 'D',
	    'Е' => 'Je',
	    'Ё' => 'Jo',
	    'Ж' => 'Zh',
	    'З' => 'Z',
	    'И' => 'I',
	    'Й' => 'Ij',
	    'К' => 'K',
	    'Л' => 'L',
	    'М' => 'M',
	    'Н' => 'N',
	    'О' => 'O',
	    'П' => 'P',
	    'Р' => 'R',
	    'С' => 'S',
	    'Т' => 'T',
	    'У' => 'U',
	    'Ф' => 'F',
	    'Х' => 'H',
	    'Ц' => 'C',
	    'Ц' => 'Ch',
	    'Ш' => 'Sh',
	    'Щ' => 'Shch',
	    'Ь' => '',
	    'Ы' => 'I',
	    'Ъ' => '',
	    'Э' => 'E',
	    'Ю' => 'Ju',
	    'Я' => 'Ja',

	    'а' => 'a',
	    'б' => 'b',
	    'в' => 'v',
	    'г' => 'g',
	    'д' => 'd',
	    'е' => 'je',
	    'ё' => 'jo',
	    'ж' => 'zh',
	    'з' => 'z',
	    'и' => 'i',
	    'й' => 'ij',
	    'к' => 'k',
	    'л' => 'l',
	    'м' => 'm',
	    'н' => 'n',
	    'о' => 'o',
	    'п' => 'p',
	    'р' => 'r',
	    'с' => 's',
	    'т' => 't',
	    'у' => 'u',
	    'ф' => 'f',
	    'х' => 'h',
	    'ц' => 'c',
	    'ч' => 'ch',
	    'ш' => 'sh',
	    'щ' => 'shch',
	    'ь' => '',
	    'ы' => 'i',
	    'ъ' => '',
	    'э' => 'e',
	    'ю' => 'ju',
	    'я' => 'ja'
  	);
	$name=strtr($name, $pairs);
	$name = strtolower($name);
    $newName='';
    $s='';
    $sp='';
    for ($i=0;$i<strlen($name);$i++){
    	$symbol=substr($name, $i, 1);
        if (!eregi("([a-z0-9])", $symbol)){
            $s=$def;
        } else {
            $s=$symbol;
        }
        if($s!==''&&!(($sp==$def | $sp=='')&&$s==$def)){
            $sp=$s;
            $newName.=$s;
        }
    }
    return $newName;
}
////////////////////////////////////////////////////////////////////