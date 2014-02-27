<?php
//termi.lv
/////////////////////////////////////////////////////////////////
defined( '_V' ) or die( 'Restricted access' );
/////////////////////////////////////////////////////////////////

class Login
{
	//user connection info
	var $userInfo;
	//user browser info
	var $userBrowser;
	//user info
	var $userSession;
	//login error
	var $loginError;
	///////////////////////////////////////////////////////////
	function Login()
	{
		$this->read_info();
//		$this->read_browser();
	}
	///////////////////////////////////////////////////////////

	// function reads ip and other server variable
	function read_info()
	{
		$return['ip'] = $_SERVER["REMOTE_ADDR"];
		$return['url'] = $_SERVER["REQUEST_URI"];
		$return['url_r'] = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : '';
		$this->userInfo = $return;
	}
	//////////////////////////////////////////////////////////////
	function get_info($param = false)
	{
		if(empty($param)){
			return $this->userInfo;
		}else{
			return $this->userInfo[$param];
		}
	}
	// function reads user browser, platform and versions
	function read_browser()
	{
		require_once('browscap/php-local-browscap.php');
		$browser=get_browser_local(null, true);
		//$browser = get_browser(null, true);
		$return['platform'] = $browser['platform'];
		$return['browser'] = $browser['browser'];
		$return['version'] = $browser['version'];
		$return['all_info'] = $browser;
		$this->userBrowser = $return;
	}
	///////////////////////////////////////////////////////////////
	function get_browser($param = null)
	{
		if(empty($param)){
			return $this->userBrowser;
		}else{
			return $this->userBrowser[$param];
		}
	}
	///////////////////////////////////////////////////////////////////
	function check($email, $pass, $refresh = true)
	{
		global $db;
		//dmp($email);dmp($pass); die;
		$user = $db->sqlf1("
			SELECT
				`id`
			FROM
				`#__user`
			WHERE
				(`email`='".$db->sqst($email)."' OR (`username`='".$db->sqst($email)."' AND `username`<>'')) AND `password`<>'' AND `password`='".md5($pass)."' AND `block`='n'
			LIMIT 1
			");

		if(!empty($user))
		{
			$db->squp("
				UPDATE
					`#__user` AS u
				SET
					u.`last_visit_date`=NOW()
				WHERE
					u.`id`='$user'
				LIMIT 1
			");
			$this->create_session($user, $refresh);
			return true;
		}
		$this->loginError='wrong email or pass';
		return false;
	}
	///////////////////////////////////////////////////////////////////
	function logout_same($uid=false)
	{
		global $db;
		// desable users with same name
		$user_id = empty($uid) ? $this->get_user('u_id') : $uid;
		$db->squp("
			UPDATE #__session
			SET user_in='0'
			WHERE user_id='$user_id'
		");
	}
	///////////////////////////////////////////////////////////////////

	function create_session($user_id, $refresh = true)
	{
		global $db, $wwwLink;
		$this->logout_same($user_id);
		// insert new session values while get in unique session id
		$a = 0;
		do{
			$ses = $_SESSION['user_session'] = random_string(16);
			$a++;
			if ($a>1000){
				error_report('session_create_problems');
			}
		}
		while (!$db->sqin("INSERT INTO `#__session`
		(`get_id`, `user_id`, `user_in`, `url`, `url_r`, `ip`,
		 `started`, `updated`)
		 VALUES
		  ('$ses', '$user_id', '1', '".$db->sqst($this->get_info('url'))."', '".$db->sqst($this->get_info('url_r'))."', '".$this->get_info('ip')."',
		    NOW(), NOW()) "));
		if($refresh){
			refresh($this->get_info('url'));
		}
	}
	///////////////////////////////////////////////////////////////////
	// read user info
	function read_info_query($ses)
	{
		return "SELECT
					a.`ip`,
					b.`id`,  b.`username`, b.`dir`, b.`user_type`
				FROM
					`#__session` AS a
				LEFT JOIN
					`#__user` AS b
				ON
					a.`user_id`=b.`id`
				WHERE
					a.`get_id`='$ses' AND a.`ip`='".$this->get_info('ip')."' AND a.`user_in`='1' AND a.`updated`>(NOW() - INTERVAL 1 DAY)
					AND b.`block`='n'
				LIMIT 1";
	}

	///////////////////////////////////////////////////////////////////
	// function reads user datas from session
	function read_user()
	{
		global $db;
		$ses = !empty($_SESSION['user_session']) ? $_SESSION['user_session'] : '';
		if (!empty($ses)){
			$this->userSession = $db->sql1($this->read_info_query($ses));
		} else {
			return false;
		}
		if(!$this->userSession){
			return false;
		}
		$db->squp("UPDATE `#__session` SET `updated`=NOW() WHERE get_id='$ses' AND ip='".$this->get_info('ip')."' LIMIT 1");
		return true;
	}
	///////////////////////////////////////////////////////////////////
	function get_user($param = null)
	{
		if(empty($param)){
			return $this->userSession;
		}else{
			return $this->userSession[$param];
		}
	}
	///////////////////////////////////////////////////////////////////
	function user_params()
	{
		$this->userSession['params'] = unserialize($this->userSession['params']);
	}
	///////////////////////////////////////////////////////////////////
	function get_param($param)
	{
		return empty($this->userSession['params'][$param]) ? false : $this->userSession['params'][$param];
	}
	///////////////////////////////////////////////////////////////////
	function set_params($param, $value)
	{
		if($this->userSession['params'][$param]!=$value){
			$this->userSession['params'][$param]=$value;
			$this->update_user('params', serialize($this->userSession['params']));
		}
	}
	///////////////////////////////////////////////////////////////////
	function update_user($field, $value)
	{
		global $db;
		$db->squp("
			UPDATE
				`#__user`
			SET `$field`='".$db->sqst($value)."'
			WHERE
				`id`='".$this->userSession['u_id']."'
			LIMIT 1
			");
	}
	///////////////////////////////////////////////////////////////////
	function logout()
	{
		global $db;
		$db->squp("UPDATE `#__session` SET `updated`=NOW() WHERE `get_id`='".$this->get_user('s_id')."' AND `ip`='".$this->get_info('ip')."' LIMIT 1");
		$this->logout_same();
		$_SESSION['user_session'] = null;
		refresh('?');
	}
	///////////////////////////////////////////////////////////////////
}
?>