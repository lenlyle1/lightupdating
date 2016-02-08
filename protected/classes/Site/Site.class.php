<?php

Class Site {

	public static $isAdmin = false;

	public static function add($name, $shortname)
	{
		$sql = "INSERT INTO sites (
					site_id,
					name,
					shortname
				) VALUES (
					null,
					?,
					?
				)";

		$newSiteId = Mysql::insertUpdate($sql, array($name, $shortname));

		if($newSiteId){
			self::addHost($newSiteId, $shortname . '.lightupmylove.com');
			self::addHost($newSiteId, $shortname . '.dev.lightupmylove.com');
		} 

		return $newSiteId;
	}

	public static function save($site_id, $name, $shortname, $blurb, $description, $keywords, $swatch)
	{
		$sql = "UPDATE sites SET
					name = ?,
					shortname = ?,
					blurb = ?,
					description = ?,
					keywords = ?,
					swatch = ?
				WHERE site_id = ?";
		
		Mysql::insertUpdate($sql, array($name, $shortname, $blurb, $description, $keywords, $swatch, $site_id));

		Memc::flush();
	}


	public static function delete($siteId)
	{
		$sql = "";

		Mysql::insertUpdate($sql, array($siteId));
	}

	public static function changeStatus($siteId, $status)
	{
		if($siteId){
			$sql = "UPDATE sites
					SET status = ?
					WHERE site_id =?";

			$siteId = Mysql::insertUpdate($sql, array($status, $siteId));

			return true;
		} else {
			return false;
		}
	}

	public static function updateHeaderImage($siteId, $imageName)
	{
		$sql = "UPDATE sites SET
					header_image = ?
				WHERE site_id = ?";

		Mysql::insertUpdate($sql, array($imageName, $siteId));

		Memc::flush('site_' . $siteId);
	}

	public static function addHost($siteId, $hostname)
	{

		$sql = "INSERT INTO site_hosts (
					hostname_id,
					site_id,
					hostname
				) VALUES (
					null, 
					?,
					?
				)";

		$hostId = Mysql::insertUpdate($sql, array($siteId, $hostname));
	}

	public static function load($host = null)
	{
		if(!$host){
			$host = $_SERVER['HTTP_HOST'];
		}

		$sql = "SELECT s.*, h.hostname
				FROM sites AS s
				LEFT JOIN site_hosts as h
					ON s.site_id = h.site_id
				WHERE h.hostname = ?";

		$site = Memc::fetch($sql, array($host), 'fetchOne', 300);

		if(!$site){
			$site = self::load('www.lightupmylove.com');
		}

		return $site;
	}

	public static function loadById($siteId)
	{
		$sql = "SELECT *
				FROM sites
				WHERE site_id = ?";

		$site = Memc::fetch($sql, array($siteId), 'fetchOne', 300, 'site_' . $siteId);

		if($site){
			$site->hosts = self::loadHosts($siteId);
		}

		return $site;
	}

	public static function loadHosts($siteId)
	{
		$sql = "SELECT *
				FROM site_hosts
				WHERE site_id = ?";

		$hosts = Memc::fetch($sql, array($siteId), 'fetchAll', 300);

		//Debugger::debug($hosts, '$hosts');

		return $hosts;
	}

	public static function loadAll()
	{
		$sql = "SELECT *
				FROM sites
				WHERE status != 'deleted'";

		$sites = Mysql::fetchAll($sql);

		return $sites;
	}

	public static function setAdmin()
	{
		self::$isAdmin = true;
	}

	public static function isAdmin()
	{
		return self::$isAdmin;
	}

	public static function load404()
	{
		global $module, $page;

		$module = '404';
		$page = '404';

		$e = new Exception('directing to 404');
		Debugger::debug('dump', 'REDIRECT', null, true);

		return '404';
		//Redirect::handle('/' . ((Site::isAdmin()) ? 'admin/' : '') . '404');
	}
}