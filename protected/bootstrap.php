<?php
/**
 * Bootstrap file
 */

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

if( preg_match('/dev\./', $_SERVER['SERVER_NAME'])) {
    define("IS_LIVE", false);
    ini_set('display_errors', 1);
    ini_set('log_errors', 0);
} else {
    define("IS_LIVE", true);
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
}

/* timezone */
date_default_timezone_set('UTC');

/* paths */
define("SITE_ROOT", realpath('../'));
define("MODULE_PATH", realpath(SITE_ROOT . "/protected/modules/"));
define("PUBLIC_ROOT", SITE_ROOT . '/public_html');

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
    Memc::init($settings->memc_server, $settings->memc_port);
}

Mysql::setvar('dbHost', $settings->dbHost);
Mysql::setvar('dbName', $settings->dbName);
Mysql::setvar('dbUser', $settings->dbUser);
Mysql::setvar('dbPass', $settings->dbPass);

require_once SITE_ROOT . '/protected/classes/Smarty/Smarty.class.php';
$smarty = new Smarty();

$smarty->setTemplateDir(SITE_ROOT . '/protected/templates/');
$smarty->setCompileDir(SITE_ROOT . '/protected/templates/templates_c/');
$smarty->setConfigDir(SITE_ROOT . '/protected/templates/configs/');
$smarty->setCacheDir(SITE_ROOT . '/protected/templates/cache/');

$smarty->assign('isLive', IS_LIVE);

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
