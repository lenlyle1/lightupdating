<?php

Class Validate_User extends Users{
	
	public static $error = null;

	public static function account($username, $password, $email)
	{
		global $settings;

		if( self::validateUsername($username) &&
			self::validatePassword($password) &&
			self::validateEmail($email)
		){
			return true;
		}

		return false;
	}

	public static function validateUsername($username)
	{
		global $settings;

		if(!preg_match('/^[a-zA-Z0-9_]+$/', $username) || strlen($username) < parent::$usernameMinLen){
			Errors::setFormError('username', 'Username must be at least ' . parent::$usernameMinLen . 
			' characters long and must consist of letters and numbers and _ only.');
			
			return false;
		}

		foreach(split('_', $username) as $word){
			if(in_array($word, $settings->swearwords)){
				Errors::setFormError('username', 'That username is not allowed');
				
				return false;
			}
		}

		// check not already used
		if($user = Users::fetchByUsername($username)){
			Errors::setFormError('username', 'That username is already in use');
			
			return false;
		}

		return true;
	}

	public static function validatePassword($password)
	{
		if(strlen($password) < parent::$passwordMinLen ){
			Errors::setFormError('password', 'Password too short');
			
			return false;
		}

		return true;
	}

	public static function validateEmail($email)
	{
		// check valid email
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  	Errors::setFormError('email', 'Invalid email address'); 
			
			return false;
		}
		// check not already used
		if($user = Users::fetch($email)){
			Errors::setFormError('email', 'Email already in use');
			
			return false;
		}

		return true;
	}
}