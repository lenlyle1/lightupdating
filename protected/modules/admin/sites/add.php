<?php

$return = '/admin/sites';

if(Validate_Post::isPresent()){
	
	$siteId = Site::add(
		Utils::getPost('name'),
		Utils::getPost('shortname')
	);

	if($siteId){
		Session::set('error', 'Site Added');
	} else {
		Session::set('error', 'Failed to add site');
	}
} else {
	Session::set('error', 'Invalid update attempt');
}

Redirect::handle($return);
