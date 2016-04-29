<?php

if($_GET['var1']){
	$metas = Metas::loadAll('user');
	$siteMetas = Metas::loadSiteMetas($_GET['var1']);

	$editSite = Site::loadById($_GET['var1']);

	$selected = array();

	foreach($siteMetas as $meta){
		$selected[] = $meta->meta_id;
	}

	Template::assign('editSite', $editSite);
	Template::assign('siteMetas', $selected);
}

$groups = array();

foreach($metas as $meta){
	$groups[$meta->scope][$meta->group_name][] = $meta;
}

Template::assign('metas', $metas);
Template::assign('groups', $groups);