<?php 

Class User_Factory extends User {


	public static function getByEmail($email)
	{
		global $db;
		//Debugger::debug($db);
		$sql = "SELECT *
				FROM users AS u
				INNER JOIN user_emails AS e 
					ON u.user_id = e.user_id
				WHERE e.email = ?";

		$user = $db->fetchOne($sql, array($email));

		return $user;
	}

	public static function getById($id)
	{
		global $db;
		
		$sql = "SELECT *
				FROM users AS u
				LEFT JOIN user_emails AS e 
					ON u.user_id = e.user_id
				WHERE u.user_id = ?";

		$user = $db->fetchOne($sql, array($id));

		Debugger::debug($user);

		return $user;
	}

	public static function wipeUser($userId)
	{
		global $db;

		Debugger::debug('Wiping user ' . $userId);
		$sql = "DELETE FROM users
				WHERE user_id = ?";

		$db->runQuery($sql, array($userId));

		$sql = "DELETE FROM user_emails
				WHERE user_id = ?";

		$db->runQuery($sql, array($userId));
	}

	public static function validatePassword($password, $minLength = 8, $maxlength = 20)
	{
		if(strlen($password) < $minLength){	
			return false;
		} else if(!preg_match('/^(?=.*\d)(?=.*[A-Z])[0-9A-Za-z!@#$%]{8,20}$/', $password)){
			return false;
		}

		return true;
	}

	public static function validateUsername($username, $minLength = 6, $maxlength = 16)
	{
		global $settings;

		if(!preg_match('/^[a-zA-Z0-9_]+$/', $username) || strlen($username) < $minLength || strlen($username) > $maxlength){
			Errors::setFormError('username', 'Username must be at least ' . $minLength . 
			' characters long and must consist of letters and numbers and _ only.');
			return false;
		}
		/*
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
		*/
		return true;
	}

}