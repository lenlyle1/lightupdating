<?php

namespace Controllers;

use Lib\Seeding\Users;

Class SeedController
{
	function users($args)
	{
		$count = (!empty($args['count'])) ? $args['count'] : 2;
		$faker = new Users();

		$faker->seed($count);
	}
}