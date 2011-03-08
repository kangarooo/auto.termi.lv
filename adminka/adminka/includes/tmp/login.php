<?php 
defined( '_V' ) or die( 'Restricted access' );



?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo lng('site_name');?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="title" content="<?php echo lng('site_name');?>" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="expires" content="-1" />
<?php if(!empty($errorMessege)){?>

	<script type="text/javascript">window.alert('<?php echo $errorMessege;?>');</script><?php
}?>
</head>
<body>

<div id="login">
	<form action="" method="post">
		<label for="email"><?php echo lng('email');?></label>
		<input type="text" id="email" name="email" value="<?php echo arg('email');?>" />
		<label for="pswd"><?php echo lng('password');?></label>
		<input type="password" id="pswd" name="pswd" />
		<input type="hidden" name="ac" value="login" />
		<button type="submit"><?php echo lng('login');?></button>
	</form>
</div>
</body>
</html>