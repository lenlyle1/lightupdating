<?php


Class Module {

	public function getDefaultPage($module)
	{
		global $siteClass;

		require_once(MODULE_PATH . '/' . (($siteClass->isAdmin()) ? 'admin/' : '') . $module . '/base.php');

		return $defaultPage;
	}

	public function moduleExists($module)
	{
		global $siteClass;

echo $siteClass->isAdmin();
		if(is_dir(MODULE_PATH . '/' . (($siteClass->isAdmin()) ? 'admin/' : '') . $module)){
			return true;
		}

echo 1;
		return false;
	}

	public function pageExists($module, $page)
	{
		global $site;

		if(file_exists(MODULE_PATH . '/' . (($siteClass->isAdmin()) ? 'admin/' : '') . $module . '/' . $page . '.php')){
			return true;
		}

		return false;
	}

	public function load($module, $page = null)
	{
		global $siteClass;

echo 1;
		if(!$this->moduleExists($module)){
			$page = $siteClass->load404();
		}

echo 12;
		if(empty($page)){
			$page = $this->getDefaultPage($module);
		}

echo 1;
		if(!$this->pageExists($module, $page)){
			$page = $site->load404();
		}

echo 1;
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