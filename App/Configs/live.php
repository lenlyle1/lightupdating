<?php

$settings = new stdClass;

$settings->appID = 'lightupmylove';
$settings->privateKey = '978c881bf9b14873b1ec72cf5c30c695db5232e72d2d27a63bb04c2d24c70428';

/*
	Mysql
*/
$settings->dbHost = 'localhost';
$settings->dbName = 'lightupmylove';
//$settings->dbHostUsers = 'localhost';
//$settings->dbNameUsers = 'users';	
$settings->dbUser = 'site_admin';
$settings->dbPass = 'B0ll0cks1';

/*
	validation
*/
$settings->validation = array();
$settings->validation['user'] = array(
	'usernameLength' => 6,
	'passwordLength' => 8,
	'usernameMaxLen' => 20,
	'passwordMaxLen' => 20
);
/*
	Memcache
*/
$settings->memc_server = '127.0.0.1';
$settings->memc_port = 11211;

/*
	Script compression
*/
$settings->compressJS = true;
$settings->compressCSS = true;

$settings->cssStack = array();
$settings->jsStack = array();

$settings->swearwords = array(
	'fuck',
	'fucking',
	'cock',
	'arse',
	'cunt',
	'motherfucker'
);

/**
	Memcached persistence
**/
$settings->cacheTimes = [
	'users' => 20,
	'sites' => 300
];

$settings->restURL = 'http://dev.lightupmylove.com';

$settings->passwordComplexity = 10;