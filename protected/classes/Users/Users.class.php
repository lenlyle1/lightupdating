<?php

Class Users{

	protected static $usernameMinLen = 6;

	protected static $usernameMaxLen = 20;

	protected static $passwordMinLen = 8;

	protected static $passwordMaxLen = 30;

	protected static $passwordEncryptOptions = array('cost' => 12);

	public static function login($email, $password)
	{
		$user = self::fetch($email);

		if($user){
			if(password_verify($password, $user->password)){
				// valid login -load roles and permissions

				return $user;
			}
		}

		return false;
	}

	public static function logout()
	{

		//log the user out		
		Session::wipe('loggedIn');
		Session::wipe('user');
	}

	public static function fetch($email)
	{
		$sql = "SELECT *
				FROM users AS u
				LEFT JOIN user_emails AS e 
					ON u.user_id = e.user_id
				WHERE e.email = ?";

		$user = Memc::fetch($sql, array($email), 'fetchOne', 60*60*24*30, 'user_' . $email);

		return $user;
	}

	public static function fetchByUsername($username)
	{
		$sql = "SELECT *
				FROM users AS u
				LEFT JOIN user_emails AS e 
					ON u.user_id = e.user_id
				WHERE u.username = ?";


		$user = Memc::fetch($sql, array($username), 'fetchOne', 60*60*24*30, 'user_' . $username);

		return $user;
	}

	public static function fetchList($offset, $count)
	{
		$sql = "SELECT *
				FROM users
				LIMIT " . $offset . ", " . $count;

		$users = Mysql::fetchAll($sql);

		return $users;
	}

	public static function fetchTotalCount($siteId)
	{
		$sql = "SELECT COUNT(*) AS count
				FROM site_users
				WHERE site_id = ?";

		$result = Mysql::fetchOne($sql, array($siteId));

		return $result;
	}

	public static function update($user_id = null, 
								  $username = null, 
								  $password = null, 
								  $email = null, 
								  $first = null, 
								  $last = null,  
								  $gender = null,  
								  $dob = null,  
								  $country = null,  
								  $postcode = null,
								  $ethicity)
	{

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
					last,
					gender,
					dob,
					country,
					postcode,
					ethnicity,
					created_ts
				) VALUES (
					:user_id,
					:username,
					:password,
					:first,
					:last,
					:gender,
					:dob,
					:country,
					:postcode,
					:ethnicity,
					UNIX_TIMESTAMP()
				) ON DUPLICATE KEY UPDATE 					
					username = :username,
					password = :password,
					first = :first,
					last = :last,					
					gender = :gender,
					dob = :dob,
					country = :country,
					postcode = :postcode,
					ethnicity = :ethnicity";

		$userId = Mysql::insertUpdate($sql, array(
			':user_id' => $user_id,
			':username' => $username,
			':password' => self::encryptPassword($password),
			':first' => $first,
			':last' => $last,
			':gender' => $gender,
			':dob' => $dob,
			':country' => $country,
			':postcode' => $postcode,
			':ethnicity' => $ethicity,
		));

		Debugger::debug($userId, 'user id');
		$emailId = self::insertEmail($userId, $email);


	}

	public static function insertEmail($user_id, $email)
	{
		$sql = "INSERT INTO user_emails (
					user_id,
					email
				) VALUES (
					:user_id,
					:email
				)";

		$emailId = Mysql::insertUpdate($sql, array(
			':user_id' => $user_id, 
			':email' => $email
		));

		return $emailId;
	}

	public static function encryptPassword($password)
	{
		return password_hash($password, PASSWORD_BCRYPT, self::$passwordEncryptOptions);
	}

	public static function getUser()
	{
		$user = Session::get('user');
	}

	public static function create($username, $email, $password)
	{
		
	}
}