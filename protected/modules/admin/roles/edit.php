<?php
Debugger::debug($_GET['var1']);

if(!empty($_POST)){
	Debugger::debug($_POST);
	$roleId = $_POST['role_id'];
	$moduleId = $_POST['module_id'];
	$permission = (!empty($_POST['permission']) ? $_POST['permission'] : 'view');
	Roles::savePermission($roleId, $moduleId, $permission);
	Ajax::respond(Ajax::setupResponse());
}

if(!empty($_GET['var1'])){
	$role = Roles::load($_GET['var1']);
	$modules = Module::loadAll();

	Debugger::debug($role);
	Debugger::debug($modules);

	Template::assign('role', $role);
	Template::assign('modules', $modules);
}