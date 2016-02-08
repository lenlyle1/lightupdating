<?php


Class Module {

	public static function getDefaultPage($module)
	{
		require_once(MODULE_PATH . '/' . ((Site::isAdmin()) ? 'admin/' : '') . $module . '/base.php');

		return $defaultPage;
	}

	public static function moduleExists($module)
	{
		if(is_dir(MODULE_PATH . '/' . ((Site::isAdmin()) ? 'admin/' : '') . $module)){
			return true;
		}

		return false;
	}

	public static function pageExists($module, $page)
	{
		if(file_exists(MODULE_PATH . '/' . ((Site::isAdmin()) ? 'admin/' : '') . $module . '/' . $page . '.php')){
			return true;
		}

		return false;
	}

	public static function load($module, $page = null)
	{
		if(!self::moduleExists($module)){
			$page = Site::load404();
		}

		if(empty($page)){
			$page = self::getDefaultPage($module);
		}

		if(!self::pageExists($module, $page)){
			$page = Site::load404();
		}

		//Debugger::debug(MODULE_PATH . '/' . ((Site::isAdmin()) ? 'admin/' : '') . $module . '/' . $page . '.php');

		if(file_exists(MODULE_PATH . '/' . ((Site::isAdmin()) ? 'admin/' : '') . $module . '/' . $page . '.php')){
			require_once(MODULE_PATH . '/' . ((Site::isAdmin()) ? 'admin/' : '') . $module . '/' . $page . '.php');
		} else {
			$page = Site::load404();
		}

		return $page;
	}

	public static function loadAll()
	{
		$sql = "SELECT *
				FROM modules";

		$modules = Memc::fetch($sql, null, 'fetchAll', 300);

		return $modules;
	}
}