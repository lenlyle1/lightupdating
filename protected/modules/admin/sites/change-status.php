<?php

$response = Ajax::setupResponse();

if(Validate_Post::isPresent()){
	if(Site::changeStatus(Utils::getPost('siteId'), Utils::getPost('status'))){
		$response['success'] = true;
		Memc::flush('site_' . Utils::getPost('siteId'));
	}

} else {
	$response['error'] = 'Illegal page access';
}

Ajax::respond($response);