<?php

Class Users{

	protected $usernameMinLen = 6;

	protected $usernameMaxLen = 20;

	protected $passwordMinLen = 8;

	protected $passwordMaxLen = 30;

	protected $passwordEncryptOptions = array('cost' => 12);

	public function login($email, $password)
	{
		$user = $this->fetch($email);

		if($user){
			if(password_verify($password, $user->password)){
				// valid login -load roles and permissions

				return $user;
			}
		}

		return false;
	}

	public function logout()
	{

		//log the user out		
		Session::wipe('loggedIn');
		Session::wipe('user');
	}

	public function fetch($email)
	{
		global $db;

		$sql = "SELECT *
				FROM users AS u
				LEFT JOIN user_emails AS e 
					ON u.user_id = e.user_id
				WHERE e.email = ?";

		$user = $memc->fetch($sql, array($email), 'fetchOne', 60*60*24*30, 'user_' . $email);

		return $user;
	}

	public function fetchByUsername($username)
	{
		global $db;
		
		$sql = "SELECT *
				FROM users AS u
				LEFT JOIN user_emails AS e 
					ON u.user_id = e.user_id
				WHERE u.username = ?";


		$user = $memc->fetch($sql, array($username), 'fetchOne', 60*60*24*30, 'user_' . $username);

		return $user;
	}

	public function fetchList($offset, $count)
	{
		global $db;
		
		$sql = "SELECT *
				FROM users
				LIMIT " . $offset . ", " . $count;

		$users = $db->fetchAll($sql);

		return $users;
	}

	public function fetchTotalCount($siteId)
	{
		global $db;
		
		$sql = "SELECT COUNT(*) AS count
				FROM site_users
				WHERE site_id = ?";

		$result = $db->fetchOne($sql, array($siteId));

		return $result;
	}

	public function update($user_id = null, $username = null, $password = null, $email = null, $first = null, $last = null)
	{
		global $db;
		
		$valid = Validate_User::account($username, $password, $email);

		if(!$valid){
			return false;
		}

		Debugger::debug('inserting user');
		$sql = "INSERT INTO users (
					user_id,
					username,
					password,
					first,
					last
				) VALUES (
					:user_id,
					:username,
					:password,
					:first,
					:last
				) ON DUPLICATE KEY UPDATE 					
					username = :username,
					password = :password,
					first = :first,
					last = :last";

		$userId = $db->insertUpdate($sql, array(
			':user_id' => $user_id,
			':username' => $username,
			':password' => $this->encryptPassword($password),
			':first' => $first,
			':last' => $last
		));

		Debugger::debug($userId, 'user id');
		$emailId = $this->insertEmail($userId, $email);


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

	public function encryptPassword($password)
	{
		return password_hash($password, PASSWORD_BCRYPT, $this->$passwordEncryptOptions);
	}

	public function getUser()
	{
		$user = Session::get('user');
	}

}