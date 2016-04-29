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
if(!empty($admin)){
	$site->setAdmin();
	require_once('adminIndex.php');
} else {

	//force to signup page if not live
	if($site->site->status != 'active' ){
		$module = 'user';
		$page = 'signup';
	}
	// rework this as will break
	if(empty($module)){
		$module = 'home';
	}

	$moduleClass = new Module();

	$page = $moduleClass->load($module, $page);
		
	Template::assign('site', $site->site);
	Template::assign('page', $page);
	Template::assign('module', $module);

	//swatch testing
	if(!file_exists(PUBLIC_ROOT . '/assets/css/site-' . $site->site->shortname . '.css')){
		$swatch = new Swatch($site->site->swatch);
	} else {
		Template::assign('$siteStyle', 'site-' . $site->site->shortname );
	}


	$smarty->display($module . '/' . $page . '.tpl');
}

	echo '<br />' . round(Timer::getTime(), 6);
