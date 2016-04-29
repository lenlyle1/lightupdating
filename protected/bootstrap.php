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
define("PROTECTED_ROOT", SITE_ROOT . "/protected/");
define("MODULE_PATH", PROTECTED_ROOT . "modules/");
define("PUBLIC_ROOT", SITE_ROOT . '/public_html/');
define("CLASS_PATH", PROTECTED_ROOT . 'lib/');

set_include_path(get_include_path() . PATH_SEPARATOR . realpath(SITE_ROOT . "/protected/"));

/* SESSION expiry - 30 days */
ini_set('session.gc_maxlifetime', 60*60*24*30);
session_start();


require_once 'autoloader.php';

//Debugger::debug($_SERVER['SERVER_NAME'] );

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

if(!defined("REST")){
    require_once SITE_ROOT . '/protected/lib/Smarty/Smarty.class.php';
    $smarty = new Smarty();

    $smarty->setTemplateDir(SITE_ROOT . '/protected/templates/');
    $smarty->setCompileDir(SITE_ROOT . '/protected/templates/templates_c/');
    $smarty->setConfigDir(SITE_ROOT . '/protected/templates/configs/');
    $smarty->setCacheDir(SITE_ROOT . '/protected/templates/cache/');

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
