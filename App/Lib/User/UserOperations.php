<?php

namespace Lib\User;

use \Models\User;

Class UserOperations
{
	public function load($id)
	{
		$user = new User();

		$values = $user->getById($id, 'id', true);

		return $values;
	}
}