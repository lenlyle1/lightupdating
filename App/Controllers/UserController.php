<?php

namespace Controllers;

use Lib\User\UserOperations as UserOp;
use Lib\Utils\Template;
use Lib\Utils\Debugger;
use Models\User;
use Lib\User\Signup;

Class UserController 
{
	function showDetails($vars)
	{
		$user = new UserOp();
		$userDetails = $user->load($vars['id']);

		Template::assign('user', $userDetails);
		return 'user/view';
	}
	
	function signup()
	{

		return 'user/signup';
	}
	
	function processSignup()
	{
		Debugger::debug('processing signup');
		$signup = new Signup();
		$response = $signup->createAccount(
				$_POST['first'],
				$_POST['last'],
				$_POST['username'],
				$_POST['password'],
				$_POST['email']
			);


		return 'user/signup1';
	}
	
	function listFavourites()
	{

	}

	function addFavourite()
	{

	}

	function deleteFavourite()
	{

	}


}