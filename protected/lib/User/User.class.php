<?php

//namespace User;

Class User 
{

	protected $passwordEncryptOptions = array('cost' => 12);

	public $statuses = array('ACTIVE' => 1,
									'SUSPENDED' => 2,
									'DELETED' => 3);

	public function create($username, $email, $password, $gender, $postcode)
	{
		global $db;
		
		if($this->validateUsername($username) && $this->validateEmail($email) && $this->validatePassword($password)){
			// hash password
			$password = $this->encryptPassword($password);

			$sql = "INSERT INTO users
					(
						username,
						password,
						gender,
						postcode
					) VALUES (
						?,
						?,
						?,
						?
					)";

			$userId = $db->insertUpdate($sql, array($username, $password, $gender, $postcode));

			if(!empty($userId)){
				$this->insertEmail($userId, $email);
			}

			return $userId;
		} 

		return false;
	}

	public function suspendUser($userId)
	{
		return $this->changeStatus($userId, $this->$statuses['SUSPENDED']);
	}

	public function deleteUser($userId)
	{		
		return $this->changeStatus($userId, $this->$statuses['DELETED']);
	}

	public function changeStatus($userId, $status)
	{		
		global $db;
		
		$sql = "UPDATE users 
				SET status_id = ?
				WHERE user_id = ?";

		$success = $db->insertUpdate($sql, array($status, $userId));

		return $success;
	}

	public function deleteUserPermanentely($userId)
	{
		global $db;
		
		$sql = "DELETE FROM users 
				WHERE user_id = ?";

		$db->runQuery($sql, array($userId));

		$sql = "DELETE FROM user_emails 
				WHERE user_id = ?";

		$db->runQuery($sql, array($userId));
	}

	public function insertEmail($user_id, $email)
	{
		global $db;
		
		$sql = "INSERT INTO user_emails (
					user_id,
					email
				) VALUES (
					:user_id,
					:email
				)";

		$emailId = $db->insertUpdate($sql, array(
			':user_id' => $user_id, 
			':email' => $email
		));

		return $emailId;
	}
	public function update($fields)
	{
		global $db;
		
		$sql = "UPDATE users
				SET ";

		$updateLines = array();

		foreach($fields as $k => $v){
			$updateLines[] = $k . ' = :' . $k;
		}

		$updatedLines = impode(', ', $updatedLines);

	}

	public function validatePassword($password, $minLength = 8, $maxlength = 20)
	{
		if(strlen($password) < $minLength){	
			return false;
		} else if(!preg_match('/^(?=.*\d)(?=.*[A-Z])[0-9A-Za-z!@#$%]{8,20}$/', $password)){
			return false;
		}

		return true;
	}

	public function validateUsername($username, $minLength = 6, $maxlength = 16)
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

	public function getByEmail($email)
	{
		global $db;
		Debugger::debug($db);
		$sql = "SELECT *
				FROM users AS u
				INNER JOIN user_emails AS e 
					ON u.user_id = e.user_id
				WHERE e.email = ?";

		$user = $db->fetchOne($sql, array($email));

		Debugger::debug($sql);
		Debugger::debug($email);
		Debugger::debug($user);

		return $user;
	}

	public function getById($id)
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

	public function checkSwearing($word)
	{

	}

	public function validateEmail($email)
	{
		// check valid email
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  	Errors::setFormError('email', 'Invalid email address'); 
			
			return false;
		}
		// check not already used
		
		if($user = $this->getByEmail($email)){
			Errors::setFormError('email', 'Email already in use');
			
			return false;
		}
	
		return true;
	}


	public function encryptPassword($password)
	{
		return password_hash($password, PASSWORD_BCRYPT, $this->$passwordEncryptOptions);
	}
}
