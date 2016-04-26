<?php

Class API_User {

	public function login($params = null)
	{

	}

	public function logout($params = null)
	{

	}

	public function create($params = null)
	{

	}

	public function delete($params = null)
	{

	}

	public function suspend($params = null)
	{

	}

	public function update($params = null)
	{

	}

	public function load($params = null)
	{		
		if(empty($params[0])){
			return 'no id';
		}

		$user = User::getById($params[0]);

		unset($user->password);

		return $user;
	}
}