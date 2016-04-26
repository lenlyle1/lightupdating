<?php

namespace mySample;
/**
 *	User Code Sample for job application
 *
 *	Author: Len Lyle
 *	Date: 4/14/2016
 *
 *	Basic test tables schema - PDO used for running queries
 *	
 *	users
 *	====
 *	user_id
 *	email
 *	username
 *	password - hashed using password_hash
 *	email
 *	
 *	addresses
 *	=======
 *	address_id
 *	user_id
 *	is_default
 *	first_name
 *	last_name
 *	address1
 *	address2
 *	city
 *	state
 *	zip
 *	
 *  Assuming \Database\Mysql PDO class in autoload path with db connection created - returns null when no results found
 *	Assuming other helper classes autoloading where implied
 */

Class User {

	public static function login($email, $password)
	{
		$sql = "SELECT *
				FROM users
				WHERE email = ?";

		$user = \Database\Mysql::fetchOne($sql, array(trim($email)));

		if($user){
			// user found - validate password
			if(password_verify(trim($password), $user->password)){
				/* 	
					valid login, load address, could be done with a join on first query, 
					but seperating the queries, makes first query lightweight for failed logins
				 */
				$sql = "SELECT *
						FROM addresses
						WHERE user_id = ?";

				$user->addresses = \Database\Mysql::fetchAll($sql, array($user->user_id));
				
				$user->default_address = self::getDefaultAddress($user);

				return $user;
			} else {
				die('Invalid password');
			}
		} else {
			//generic die notice for testing
			die('User not found');
		}
	}

	private static function getDefaultAddress($user)
	{
		foreach($user->addresses as $address){
			if($address->is_default){
				return $address;
			}
		}

		return null;
	}
}


/*
 *	Sample usage
 */
$user = \mySample\User::login('test@test.com', 'testP455w0rd');

print_r($user);
