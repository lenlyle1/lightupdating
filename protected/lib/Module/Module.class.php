<?php


Class Module {

	public function getDefaultPage($module)
	{
		global $site;

		require_once(MODULE_PATH . '/' . (($site->isAdmin()) ? 'admin/' : '') . $module . '/base.php');

		return $defaultPage;
	}

	public function moduleExists($module)
	{
		global $site;

		$path =  MODULE_PATH . '/' . (($site->isAdmin()) ? 'admin/' : '') . $module;

		if(is_dir(MODULE_PATH . '/' . (($site->isAdmin()) ? 'admin/' : '') . $module)){
			return true;
		}

		return false;
	}

	public function pageExists($module, $page)
	{
		global $site;
		
		if(file_exists(MODULE_PATH . '/' . (($site->isAdmin()) ? 'admin/' : '') . $module . '/' . $page . '.php')){
			return true;
		}

		return false;
	}

	public function load($module, $page = null)
	{
		global $site;

		if(!$this->moduleExists($module)){
			$page = $site->load404();
		}

		if(empty($page)){
			$page = $this->getDefaultPage($module);
		}

		if(!$this->pageExists($module, $page)){
			$page = $site->load404();
		}

		//Debugger::debug(MODULE_PATH . '/' . ((Site::isAdmin()) ? 'admin/' : '') . $module . '/' . $page . '.php');

		if(file_exists(MODULE_PATH . '/' . (($site->isAdmin()) ? 'admin/' : '') . $module . '/' . $page . '.php')){
			require_once(MODULE_PATH . '/' . (($site->isAdmin()) ? 'admin/' : '') . $module . '/' . $page . '.php');
		} else {
			$page = $site->load404();
		}

		return $page;
	}

	public function loadAll()
	{
		$sql = "SELECT *
				FROM modules";

		$modules = $memc->fetch($sql, null, 'fetchAll', 300);

		return $modules;
	}
}