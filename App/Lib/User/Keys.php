<?php

namespace Lib\User;

use Models\User;

Class Keys 
{
	private static $salt = 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur adipisci velit';

	public static function createPublic(User $user)
	{
		$keystring = $user->get('username') . self::$salt;

		return self::encode($keystring);
	}

	public static function createSecret(User $user)
	{
		$keystring = $user->get('username') . $user->get('created_ts') . self::$salt;

		return self::encode($keystring);
	}

	public static function encode($key)
	{
		// use sha1 
		$encoded = sha1($key);

		return $encoded;
	}
}