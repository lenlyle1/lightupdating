<?php

namespace Lib\Auth\Traits;

Trait Hash
{
	static function hashPassword($password)
	{
		global $settings;

		return password_hash($password, PASSWORD_BCRYPT, array('cost' => $settings->passwordComplexity));
	}
}