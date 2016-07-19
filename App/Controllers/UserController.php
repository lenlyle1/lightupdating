<?php

namespace Controllers;

use Lib\User\UserOperations as UserOp;
use Lib\Utils\Template;

Class UserController 
{
	function showDetails($vars)
	{
		$user = new UserOp();
		$userDetails = $user->load($vars['id']);

		Template::assign('user', $userDetails);
		return 'user/view';
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