<?php

/*
	home
*/
$router->map( 'GET', '/', 'PageController#home');

/*
	faq
*/
$router->map( 'GET', 'search', 'PageController#search');


$router->map( 'GET', '/test', 'PageController#test');