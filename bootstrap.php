<?php
/**
 * Bootstrap file
 */
use Lib\Utils\Debugger;

/* timezone */
date_default_timezone_set('UTC');

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// echo $_SERVER['SERVER_NAME'];
// echo preg_match('/local/', $_SERVER['SERVER_NAME']);

if( preg_match('/dev\./', $_SERVER['SERVER_NAME']) || 
    preg_match('/local/', $_SERVER['SERVER_NAME'])) {
        define("IS_LIVE", false);
} else {
    define("IS_LIVE", true);
}


/* paths */
if(defined("IN_API")){
    define("SITE_ROOT", realpath('../../'));
} else {
    define("SITE_ROOT", realpath('../'));
}
define("PUBLIC_ROOT", SITE_ROOT . '/public_html/');
define("APP_DIR", SITE_ROOT . '/App');
define("TEMPLATE_DIR", APP_DIR . '/Views');

set_include_path(get_include_path() . PATH_SEPARATOR . realpath(SITE_ROOT . "/App/"));

/* SESSION expiry - 30 days */
ini_set('session.gc_maxlifetime', 60*60*24*30);
session_start();

require __DIR__ . '/vendor/autoload.php';
require 'autoload.php';

if(IS_LIVE){
    $configFile = 'Configs/live.php';
} else {
    $configFile = 'Configs/dev.php';
}
require $configFile;

Debugger::debug('Running in ' . ((IS_LIVE) ? 'live' : 'dev') . ' mode');

// convert to static class
if(class_exists('Memcached')){
    $memc = new Lib\Caching\Memc($settings->memc_server, $settings->memc_port);
}

$db = new Lib\DB\Mysql();
$db->setvar('dbHost', $settings->dbHost);
$db->setvar('dbName', $settings->dbName);
$db->setvar('dbUser', $settings->dbUser);
$db->setvar('dbPass', $settings->dbPass);


if(!defined("REST")){
    $smarty = new Smarty();

    $smarty->addPluginsDir(APP_DIR . '/SmartyPlugins/');
    $smarty->setTemplateDir(TEMPLATE_DIR);
    $smarty->setCompileDir(TEMPLATE_DIR . '/templates_c/');
    $smarty->setConfigDir(TEMPLATE_DIR . '/configs/');
    $smarty->setCacheDir(TEMPLATE_DIR . '/cache/');

    $smarty->assign('isLive', IS_LIVE);
}

//$countries = Country::loadCountries();

//Debugger::debug($countries);