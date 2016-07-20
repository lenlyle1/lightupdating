<?php

namespace Models;

Class User extends Base
{
	use \Lib\Auth\Traits\Hash;

	public $table = 'users';
}