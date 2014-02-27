<?php 
defined( '_V' ) or die( 'Restricted access' );

header("HTTP/1.0 404 Not Found");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo lng('site_name');?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="<?php echo lng('site_name');?>" />

<meta name="description" content="<?php echo lng('not found');?>" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="-1" />
</head>
<body>

<div class="very_important">
	<p><?php
	echo lng('not found');?>
	</p><?php
	$menu->create_link($menu->link['id'], false, '/');
?></div>
</body>
</html>