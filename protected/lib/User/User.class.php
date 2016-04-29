<?php

//namespace User;

Class User 
{

	protected $passwordEncryptOptions = array('cost' => 12);

	public $statuses = array('ACTIVE' => 1,
							 'SUSPENDED' => 2,
							 'DELETED' => 3);

	public $data;

	public function __construct($email = null)
	{
		if($email){

		}
	}

	public function create($username, $email, $password, $gender, $postcode)
	{
		global $db;
		
		if(User_Factory::validateUsername($username) && User_Factory::validateEmail($email) && User_Factory::validatePassword($password)){
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
		
		// if($user = User_Factory::getByEmail($email)){
		// 	Errors::setFormError('email', 'Email already in use');
			
		// 	return false;
		// }
	
		return true;
	}


	public function encryptPassword($password)
	{
		return password_hash($password, PASSWORD_BCRYPT, $this->passwordEncryptOptions);
	}
}
