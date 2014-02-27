<?php
defined( '_V' ) or die( 'Restricted access' );



if(!isset($menu->other[1]) && !empty($menu->other[0])) {
	$extension = $menu->getExtension();
	if(in_array($extension, array('js'))) {
		switch($menu->other[0]) {
			case 'design':
				if(file_exists($absolutePathAdmin.'/design/'.$extension.'/'.$menu->other[0].'.'.$extension)) {
					require_once ($absolutePathAdmin.'/design/'.$extension.'/'.$menu->other[0].'.'.$extension);
					$errorPage = false;
					$templateName = '';
				}
			break;
		}
	}
}