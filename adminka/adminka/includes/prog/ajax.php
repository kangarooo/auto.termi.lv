<?php
defined( '_V' ) or die( 'Restricted access' );


$errorPage = false;
$templateName = '';
if(empty($menu->other[0])) {
	$errorPage = true;
} else {
	switch($menu->other[0]) {
		case 'error':
			if (!empty($menu->other[0]) && file_exists($absolutePath.'/includes/prog/ajax/'.$menu->other[0].'.php') && file_exists($absolutePath.'/includes/tmp/ajax/'.$menu->other[0].'.php')) {
				require_once ($absolutePath.'/includes/prog/ajax/'.$menu->other[0].'.php');
				if(!$errorPage)
				require_once ($absolutePath.'/includes/tmp/ajax/'.$menu->other[0].'.php');
			}
		break;

		default:
			$errorPage = true;
		break;
	}
}
