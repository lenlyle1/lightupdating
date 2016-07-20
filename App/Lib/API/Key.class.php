<?php
/**
 *	API key generator
 *	
 *	Require a valid user for the api key
 *
 *	key = hash(username . password . secret key)
 *
 *	if not logged in, no key required
 *
 **/

Class API_Key extends API{

	public function __construct($params = array())
	{
		global $settings;

		$key = array(
			'key' => $this->encodeKey()
		);

		return $key;
	}

	public function createKey($user)
	{
		global $settings;

		if($user){
			$keyStr = $settings['appID'] . $settings['privateKey'] . $user->username . $user->password;
		}
	}

	private function encodeKey($user)
	{
		
	}

	public function verifyKey($key, $origin)
	{

		return true;
	}
}