<?php



use Lib\Utils\Timer;
use Lib\Utils\Session;
use Lib\Utils\Template;

/**
	Load the bootstrap
**/
require_once "../bootstrap.php";
/**
	Start timer
**/
Timer::start();
/*
	Load the current site
*/
$siteModel = new Models\Sites();
$site = $siteModel->site;

/*
	Swatch testing
*/
if(!file_exists(PUBLIC_ROOT . '/assets/css/site-' . $site->shortname . '.css')){
	$swatch = new Lib\Style\Swatch($site->swatch);

	//dump($site->swatch);
} else {
	Template::assign('$siteStyle', 'site-' . $site->shortname );
}

/*
	Routing
*/
require_once(SITE_ROOT . "/App/Router/routing.php");

/**
    Flush memcache if required
*/
if(!empty($flush)){
	$memc->flush();
	Lib\Redirect::handle('/');
}


$user = Session::get('user');

Template::assign('user', $user);	
Template::assign('prelaunch', ($site->status == 'prelaunch') ? true : false);

/** 
	error handling 
**/
Template::assign('error', Session::get('error'));

if(Session::get('error')){
	Session::wipe('error');
}

/** 
	mesage handling 
**/
Template::assign('message', Session::get('message'));

if(Session::get('message')){
	Session::wipe('message');
}

echo '<br />' . number_format(round(Timer::getTime(), 8), 6);
