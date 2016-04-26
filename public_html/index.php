<?php
/**
	Load the bootstrap
**/
require_once "../protected/bootstrap.php";

/**
	Start timer
**/
Timer::start();
/**
	parse $_GET vars
**/
$page = null;
foreach($_GET as $k => $v){
	$$k = $v;
}

if(!empty($flush)){
	$memc->flush();
	Redirect::handle('/');
}

$site = new Site();
if($site->load()){
	Site::load404();
}

//test
$user = Session::get('user');

Template::assign('user', $user);	
Template::assign('prelaunch', ($site->site->status == 'prelaunch') ? true : false);


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
Template::assign('message', Session::get('error'));

if(Session::get('message')){
	Session::wipe('message');
}

/**
	Page loading
**/
$siteClass = new Site();
if(!empty($admin)){
	$siteClass->setAdmin();
	require_once('adminIndex.php');
} else {

	//force to signup page if not live
	if($thisSite->status != 'active' ){
		$module = 'user';
		$page = 'signup';
	}
	// rework this as will break
	if(empty($module)){
		$module = 'home';
	}
	$module = new Module();

	$page = $module->load($module, $page);
			
echo 1;
	Template::assign('site', $site);
	Template::assign('page', $page);
	Template::assign('module', $module);

	//swatch testing
	if(!file_exists(PUBLIC_ROOT . '/assets/css/site-' . $site->shortname . '.css')){
		Swatch::buildSwatch($site->swatch);
	} else {
		Template::assign('$siteStyle', 'site-' . $site->shortname );
	}
	$smarty->display($module . '/' . $page . '.tpl');
}

	echo '<br />' . round(Timer::getTime(), 6);