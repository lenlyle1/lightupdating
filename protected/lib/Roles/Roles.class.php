<?php

Class Roles {

	/*
		Get all roles for specific user
	*/
	public function loadUser($userId)
	{
		
	}

	/*
		Save roles for specific user
	*/
	public function saveUser($userId)
	{
		
	}

	public function load($roleId)
	{
		$sql = "SELECT *
				FROM roles
				WHERE role_id = ?";

		//$role = $db->fetchOne($sql, array($roleId));

		$role = $memc->fetch($sql, array($roleId), 'fetchOne', 300);
		$role->modules = $this->loadModules($roleId);

		return $role;
	}

	public function savePermission($roleId, $moduleId, $permission = 'view')
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

		$id = $db->insertUpdate($sql, $params);


	}

	public function loadAll()
	{
		$sql = "SELECT *
				FROM roles";

		$roles = $db->fetchAll($sql);

		return $roles;
	}

	public function loadModules($roleId = null)
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


		$modules = $memcfetch($sql, $params, 'fetchAll', 1);
		//$modules = $db->fetchOne($sql, array($roleId));

		return $modules;
	}
}