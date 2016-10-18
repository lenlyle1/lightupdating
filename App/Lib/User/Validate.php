<?php

namespace Lib\User;

Trait Validate
{
	public function validateEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		    return true;
		}

		// set error message
		return false;
	}

	public function validateUsername($username)
	{

	}

	public function validatePassword($password)
	{

	}
}