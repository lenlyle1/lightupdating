<?php

class API_Endpoints {

	private static $endpoints = array(
		'user' => array(
			'login' => '/api/user/login/',
			'create' => '/api/user/create/',
			'delete' => '/api/user/delete/',
			'fetch_by_email' => '/api/user/fetchbyemail',
			'suspend' => '/api/user/suspend/',
			'logout' => '/api/user/wipe/',
			'logout' => '/api/user/logout/',
			'update' => '/api/user/update/'
		)
	);

	public function get($class, $function)
	{
		global $settings; 

		if(!empty(self::$endpoints[$class][$function])){
			return self::$endpoints[$class][$function];
		} else {
			return false;
		}
	}

	public static function append($endpoint, $string)
	{
		return $endpoint . $string . '/';
	}
}