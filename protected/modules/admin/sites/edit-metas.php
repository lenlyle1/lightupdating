<?php

if(!empty($_POST['action'])){

	Debugger::debug($_POST);

	$result = Metas::changeSiteMeta($_POST['action'], $_POST['meta_id'], $_POST['site_id']);

	Debugger::debug($result);
}


if($_GET['var1']){
	$meta = Metas::loadAll('site', $_GET['var1']);
}