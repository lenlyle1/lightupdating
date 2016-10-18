<?php

$router->map( 'POST', '/user/do-login', 'AuthController#login' );

$router->map( 'GET', '/user//logout', 'AuthController#logout' );