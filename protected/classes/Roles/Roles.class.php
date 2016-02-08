<?php

Class Roles {

	/*
		Get all roles for specific user
	*/
	public static function loadUser($userId)
	{
		
	}

	/*
		Save roles for specific user
	*/
	public static function saveUser($userId)
	{
		
	}

	public static function load($roleId)
	{
		$sql = "SELECT *
				FROM roles
				WHERE role_id = ?";

		//$role = Mysql::fetchOne($sql, array($roleId));

		$role = Memc::fetch($sql, array($roleId), 'fetchOne', 300);
		$role->modules = self::loadModules($roleId);

		return $role;
	}

	public static function savePermission($roleId, $moduleId, $permission = 'view')
	{
		$sql = "INSERT INTO role_module_permissions (
					role_id,
					module_id,
					permission
				) VALUES (
					:role_id,
					:module_id,
					:permission
				) ON DUPLICATE KEY UPDATE 			
					permission = :permission";

					
		$params = array(
			':role_id' => $roleId,
			':module_id' => $moduleId,
			':permission' => $permission
		);

		$id = Mysql::insertUpdate($sql, $params);


	}

	public static function loadAll()
	{
		$sql = "SELECT *
				FROM roles";

		$roles = Mysql::fetchAll($sql);

		return $roles;
	}

	public static function loadModules($roleId = null)
	{
		$sql = "SELECT m.*, r.permission, r.role_id
				FROM modules AS m
				LEFT JOIN role_module_permissions AS r
					ON m.module_id = r.module_id";

		$params = null;
		if($roleId){
			$sql .= " WHERE r.role_id = ?";
			$params = array($roleId);
		}


		$modules = Memc::fetch($sql, $params, 'fetchAll', 1);
		//$modules = Mysql::fetchOne($sql, array($roleId));

		return $modules;
	}
}