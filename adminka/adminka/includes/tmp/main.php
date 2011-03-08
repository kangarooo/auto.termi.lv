<?php
defined( '_V' ) or die( 'Restricted access' );

//inluding header and other functions
require_once ($absolutePathAdmin.'/includes/tmp/main-predefinied.php');
//////////////////////////////////////////////////////////////////////////


//include_once($absolutePathAdmin."/design/editors/FCKeditor/fckeditor.php");
//$oFCKeditor = new FCKeditor('desctiption') ;
//$oFCKeditor->BasePath = $wwwPathAdmin.'/design/editors/FCKeditor/' ;

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php head_display($menu->last_title());?>
<body>
<div id="wrapper">
	<div id="conteiner">
	<div id="top-menu"><?php $menu->drop_menu(0, 't', 0, false, '.html', array('m'));?><a id="logout" href="?l" title="<?php echo lng('logout');?>"><?php echo lng('logout');?></a></div>
	<div id="path-self"><?php echo $menu->path_way();?></div>
	<div id="content"><?php

		if (!empty($codeName) && file_exists($absolutePathAdmin.'/includes/tmp/'.$codeName.'.php'))
			require_once ($absolutePathAdmin.'/includes/tmp/'.$codeName.'.php');
		?>
	</div>
	</div>
</div>
</body>
</html>