<?php

namespace Lib\Auth;

Class User 
{
	// check if logged in
	public function isLoggedIn()
	{
		if(Session::get('user')){
			return true;
		}

		return false;
	}

	// log user in
	public function login()
	{

	}

	// log user out
	public function logout()
	{
		Session::wipe('user');

		// check for keep logged in, destroy if found
		
	}
}