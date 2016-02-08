<?php

// rework this as will break
if(empty($module)){
	$module = 'users';
}

if(!$user){
	if($module != 'login'){
		Session::set('next', $_SERVER['REQUEST_URI']);
	}

	$module = 'login';
	$page = 'login';
}

//Debugger::debug($user, 'USER');
$page = Module::load($module, $page);

Template::assign('admin', $admin);
Template::assign('site', $site);
Template::assign('module', $module);
Template::assign('page', $page);

	//swatch testing
	if(!file_exists(PUBLIC_ROOT . '/assets/css/site-' . $site->shortname . '.css')){
		Swatch::buildSwatch($site->shortname);
	} else {
		Template::assign('$siteStyle', 'site-' . $site->shortname );
	}

$smarty->display('admin/' . $module . '/' . $page . '.tpl');
