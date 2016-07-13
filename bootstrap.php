<?php
/**
 * Bootstrap file
 */

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

if( preg_match('/dev\./', $_SERVER['SERVER_NAME'])) {
    define("IS_LIVE", false);
} else {
    define("IS_LIVE", true);
}

/* timezone */
date_default_timezone_set('UTC');

/* paths */
if(defined("IN_API")){
    define("SITE_ROOT", realpath('../../'));
} else {
    define("SITE_ROOT", realpath('../'));
}

/* paths */
define("PUBLIC_ROOT", SITE_ROOT . '/public_html/');
define("APP_DIR", SITE_ROOT . '/App');
define("TEMPLATE_DIR", APP_DIR . '/Views');

set_include_path(get_include_path() . PATH_SEPARATOR . realpath(SITE_ROOT . "/App/"));

/* SESSION expiry - 30 days */
ini_set('session.gc_maxlifetime', 60*60*24*30);
session_start();

require __DIR__ . '/vendor/autoload.php';
require_once 'autoload.php';

if(IS_LIVE){
    $configFile = 'Configs/live.php';
} else {
    $configFile = 'Configs/dev.php';
}
require_once $configFile;


if(class_exists('Memcached')){
    $memc = new Lib\Caching\Memc($settings->memc_server, $settings->memc_port);
}

$db = new Lib\DB\Mysql();
$db->setvar('dbHost', $settings->dbHost);
$db->setvar('dbName', $settings->dbName);
$db->setvar('dbUser', $settings->dbUser);
$db->setvar('dbPass', $settings->dbPass);


if(!defined("REST")){
    //require_once SITE_ROOT . '/App/Lib/Templating/Smarty/Smarty.class.php';
    $smarty = new Smarty();

    $smarty->addPluginsDir(APP_DIR . '/Lib/SmartyPlugins/');
    $smarty->setTemplateDir(TEMPLATE_DIR);
    $smarty->setCompileDir(TEMPLATE_DIR . '/templates_c/');
    $smarty->setConfigDir(TEMPLATE_DIR . '/configs/');
    $smarty->setCacheDir(TEMPLATE_DIR . '/cache/');

    $smarty->assign('isLive', IS_LIVE);
}

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