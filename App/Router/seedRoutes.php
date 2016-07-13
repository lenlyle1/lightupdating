<?php


/*
	Users
*/
$router->map( 'GET', '/seed/users/?[i:count]?', 'SeedController#users');