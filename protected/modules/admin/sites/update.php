<?php

$return = '/admin/sites';

if(Validate_Post::isPresent()){
	if(Utils::getPost('siteId')){
		$return .= '/edit/' . Utils::getPost('siteId');
	}
	Debugger::debug($_POST);
	Debugger::debug($_FILES['header_image']);

	Site::save(
		Utils::getPost('siteId'),
		Utils::getPost('name'),
		Utils::getPost('shortname'),
		Utils::getPost('blurb'),
		Utils::getPost('description'),
		Utils::getPost('keywords'),
		Utils::getPost('swatch')
	);

	Session::set('error', 'Site updated');
	

} else {
	Session::set('error', 'Invalid update attempt');
}

Redirect::handle($return);
