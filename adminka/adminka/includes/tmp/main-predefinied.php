<?php 
defined( '_V' ) or die( 'Restricted access' );

function head_display($title = '')
{
	global $wwwPathAdmin;

	?><head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="title" content="<?php echo $title; ?>" />
	<meta name="keywords" content="<?php echo $title; ?>" />
	<meta name="description" content="<?php echo lng('site_description');?>" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit" content="1 days" />
	<meta name="revisit-after" content="1 days" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="expires" content="-1" />
	<link rel="stylesheet" type="text/css" href="<?php echo $wwwPathAdmin;?>/design/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $wwwPathAdmin;?>/design/css/styles.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $wwwPathAdmin;?>/design/css/content.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $wwwPathAdmin;?>/design/css/print.css"<?php echo isset($_GET['print']) ? '' : ' media="print"';?> />
	<script type="text/javascript" src="<?php echo $wwwPathAdmin;?>/design/editors/fckeditor2.6.3/fckeditor.js"></script>
	<script type="text/javascript" src="<?php echo $wwwPathAdmin;?>/design/js/mootools-1.2.4-core-yc.js"></script>
	<script type="text/javascript" src="<?php echo $wwwPathAdmin;?>/design/js/mootools-1.2.4.4-more.js"></script>
	<script type="text/javascript" src="<?php echo $wwwPathAdmin;?>/design/js/extend.js"></script>
	<script type="text/javascript" src="<?php echo $wwwPathAdmin;?>/design/editors/ckeditor3.2/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo $wwwPathAdmin;?>/design/design.js"></script>
</head>
<?php
}