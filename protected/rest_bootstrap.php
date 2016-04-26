<?php
/**
 * Bootstrap file
 */

if( preg_match('/dev\./', $_SERVER['SERVER_NAME'])) {
    define("IS_LIVE", false);
} else {
    define("IS_LIVE", true);
}

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

/* timezone */
date_default_timezone_set('UTC');

define("MODULE_PATH", realpath(SITE_ROOT . "/protected/modules/"));
define("CLASS_PATH", realpath(SITE_ROOT . "/protected/lib/"));
define("PUBLIC_ROOT", SITE_ROOT . '/public_html');

set_include_path(get_include_path() . PATH_SEPARATOR . realpath(SITE_ROOT . "/protected/"));

require_once 'autoloader.php';

if(IS_LIVE){
    $configFile = 'config.inc.live.php';
} else {
    $configFile = 'config.inc.dev.php';
}

require_once $configFile;

if(class_exists('Memcached')){
    $memc = new Memc();
    $memc->init($settings->memc_server, $settings->memc_port);
}

$db = new Mysql();
$db->setvar('dbHost', $settings->dbHost);
$db->setvar('dbName', $settings->dbName);
$db->setvar('dbUser', $settings->dbUser);
$db->setvar('dbPass', $settings->dbPass);

$allowedModules = array(
    "index",
    "search",
    "findprice",
    "redirect",
    "blog",
    "about"
);

//$countries = Country::loadCountries();

//Debugger::debug($countries);
