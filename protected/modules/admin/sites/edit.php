<?php


if(!empty($_GET['var1'])){
	$editSite = Site::loadById($_GET['var1']);

	//Debugger::debug($editSite);

	Template::assign('editSite', $editSite);
	Template::assign('header_image' , $editSite->header_image);
} else {
	//Debugger::debug('fail');
}