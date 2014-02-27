<?php
//my password :)
//'nemec'=>b98d348a5a6b661829e107ee13fdb388
//me only/////
//
//echo $_SERVER["REMOTE_ADDR"];



//start code
//////////////////////////////////////////////////////////////////////////////////////////////
// define parent file
//defined( '_V' ) or die( 'Restricted access' );
define( '_V', 1 );

session_start();


//configuration
require_once ('../configuration.php');
if(!in_array($_SERVER["REMOTE_ADDR"], $acceptIpAddresses)) {
	die('Restricted access for '.$_SERVER["REMOTE_ADDR"]);
}
$adminPath = end(explode('/', $wwwPath));
$wwwPath = substr($wwwPath, 0, -(strlen($adminPath)+1));
$wwwLink = substr($wwwLink, 0, -(strlen($adminPath)+1));
$absolutePathAdmin=$absolutePath.'/'.$adminPath;
$wwwPathAdmin=$wwwPath.'/'.$adminPath;
$wwwLink=$wwwLink.'/'.$adminPath;
//main functions
require_once ($absolutePath.'/includes/main_function.php');
//admin functions
require_once ($absolutePathAdmin.'/includes/main_function.php');

//time checker
$time_started_script = mc_time();
//base class
require_once ($absolutePath.'/includes/base.php');
//login class
require_once ($absolutePath.'/includes/login.php');



$db = new Mysql(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_FIX);


//language tabs
require_once ($absolutePathAdmin.'/config/language.php');

$menuChanger = GET('menuChanger');
if(substr($menuChanger, 0, 1)=='/')
    $menuChanger = substr($menuChanger, 1);
if(strpos($menuChanger, $adminPath)!==false){
    $menuChanger = substr($menuChanger, (strlen($adminPath)+1));
}
//read user variables
//$log = new Login();
//$_SESSION['logged'] = false;
//if(!$log->read_user()) {
//	$codeName = $templateName = 'login';
//	$errorPage = false;
//}
//elseif(isset($_GET['l'])) {
//	$log->logout($log->get_user('u_id'));
//} else {
//	if($log->get_user('user_type')<100){
//		die('Restricted access');
//	}
//	$_SESSION['logged'] = true;
	require_once ($absolutePathAdmin.'/config/functions.php');
	require_once ($absolutePathAdmin.'/config/menu.php');
	require_once ($absolutePath.'/includes/menu.php');
	//navigation
	$menu = new Menu();
	$menu->create($menuChanger ? $menuChanger : '', prepareMenu($editNavigation));
	// default item
	$codeName = $menu->link['component'];
	$templateName = $menu->link['template'];
	$errorMessege = '';
	$errorPage = (!empty($menu->other)) ? true : false;
	if(get_magic_quotes_gpc()){
		//dmp($_REQUEST);
		$_REQUEST = array_stripslashes($_REQUEST);
		//dmp($_REQUEST);
	}
//}


	if (!empty($codeName) && file_exists($absolutePathAdmin.'/includes/prog/'.$codeName.'.php')) {
		require_once ($absolutePathAdmin.'/includes/prog/'.$codeName.'.php');
	}
	if($errorPage&&$codeName=='ajax'){
		$templateName = 'ajax-error';
		$errorPage = false;
	}

if(isset($_GET['print'])) {
	$templateName='mainPrint';
}
//call error template
if($errorPage) {
	$templateName = 'error';
	$params = false;
}
//dmp($templateName);
/////////////////////////////////////////////////////////////////////////////////////////
//including template
if(!empty($templateName) && file_exists($absolutePathAdmin.'/includes/tmp/'.$templateName.'.php')) {
	require_once ($absolutePathAdmin.'/includes/tmp/'.$templateName.'.php');
	//calculate scripting time
	$time_finished_script = mc_time();
	//echo "<!--time: ".($time_finished_script - $time_started_script)."-->";

}
