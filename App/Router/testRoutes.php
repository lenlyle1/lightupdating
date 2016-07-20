<?php

/*
	home
*/
$router->map( 'GET', '/testapp/?', 'TestController#list');

/*
	login
*/
$router->map( 'GET', '/user/login', 'PageController#login');

/*
	signup
*/
$router->map( 'GET', '/user/signup', 'PageController#signup');

/*
	faq
*/
$router->map( 'GET', 'search', 'PageController#search');


$router->map( 'GET', '/test', 'PageController#test');