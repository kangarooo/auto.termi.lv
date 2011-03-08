<?php
defined( '_V' ) or die( 'Restricted access' );

////////////////////////////////////////////////////////////////////////////////////////////////////////////
$errorMessege = '';
if(arg('ac')=='login') {
	$errorMessege = $log->check(arg('email'), arg('pswd'));
}
