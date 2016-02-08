<?php

$return = '/admin/sites/edit/' . Utils::getPost('siteId');

if(Validate_Post::isPresent() && !empty($_FILES['header_image'])){

	$nameBits = Image::splitName($_FILES['header_image']['name']);
	Debugger::debug($nameBits);
	$newName = 'hero-1.' . $nameBits['extension'];

	Debugger::debug($newName);

	if($uploadedFile = Image::upload($_FILES['header_image'], 'site-images/' . Utils::getPost('shortname') , $newName)){

		$fileInfo = Utils_File::getFilenameFromPath($uploadedFile);

		if($fileInfo['filename'] != $newName){
			$newName = $fileInfo['filename'];
		}
		Session::set('message', 'Image uploaded');
		Site::updateHeaderImage(Utils::getPost('siteId'), '/assets/images/site-images/' . Utils::getPost('shortname') . '/' . $newName);
	} 
} else {
	Session::set('error', 'Invalid update attempt');
}

Redirect::handle($return);
