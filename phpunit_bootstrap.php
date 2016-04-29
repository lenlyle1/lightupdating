<?php
/**
 * Bootstrap file
 */

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

define("IS_LIVE", false);

/* timezone */
date_default_timezone_set('UTC');

/* paths */
define("SITE_ROOT", realpath('./'));
define("MODULE_PATH", realpath(SITE_ROOT . "/protected/modules/"));
define("PUBLIC_ROOT", SITE_ROOT . '/public_html');
define("CLASS_PATH", SITE_ROOT . "/protected/lib/");
define("REST_URL", 'http://dev.lightupmylove.com');
set_include_path(get_include_path() . PATH_SEPARATOR . realpath(SITE_ROOT . "/protected/"));

/* SESSION expiry - 30 days */
ini_set('session.gc_maxlifetime', 60*60*24*30);
session_start();

$configFile = SITE_ROOT . '/protected/config.inc.dev.php';

require_once $configFile;

require_once './protected/autoloader.php';

if(class_exists('Memcached')){
	$memc = new Memc();
    $memc->init($settings->memc_server, $settings->memc_port);
}

$db = new Mysql();
$db->setvar('dbHost', $settings->dbHost);
$db->setvar('dbName', $settings->dbName);
$db->setvar('dbUser', $settings->dbUser);
$db->setvar('dbPass', $settings->dbPass);



