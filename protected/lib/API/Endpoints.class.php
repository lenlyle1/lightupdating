<?php

class API_Endpoints {

	private $endpoints = array(
		'user' => array(
			'login' => '/api/user/login',
			'create' => '/api/user/create',
			'delete' => '/api/user/delete',
			'suspend' => '/api/user/suspend',
			'logout' => '/api/user/logout',
			'update' => '/api/user/update'
		)
	);

	public function get($class, $function)
	{
		if(!empty($this->$endpoints[$class][$function])){
			return $this->$endpoints[$class][$function];
		} else {
			return false;
		}
	}
}