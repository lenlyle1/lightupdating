<?php

/*
	login
*/
$router->map( 'GET', '/user/login', 'UserController#login');

/*
	signup
*/
$router->map( 'GET', '/user/signup', 'UserController#signup');
$router->map( 'POST', '/user/signup', 'UserController#processSignup');


// map users details page using controller#action string
$router->map( 'GET', '/user/[i:id]/?', 'UserController#showDetails' );

// user favourites
$router->map( 'GET', '/user/favourites/?', 'UserControllers#listFavourites');

// add user favourite
$router->map( 'POST', '/user/add-favourite/[i:id]/?', 'UserController#addFavourite');

// add user favourite
$router->map( 'POST', '/user/delete-favourite/[i:id]/?', 'UserController#deleteFavourite');