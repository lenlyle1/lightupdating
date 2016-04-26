<?php

Class Site {

	public $isAdmin = false;

	public $cacheLifetime = 0;

	public $site = null;

	public function add($name, $shortname)
	{
		global $memc;

		$sql = "INSERT INTO sites (
					site_id,
					name,
					shortname
				) VALUES (
					null,
					?,
					?
				)";

		$newSiteId = $db->insertUpdate($sql, array($name, $shortname));

		if($newSiteId){
			$this->addHost($newSiteId, $shortname . '.lightupmylove.com');
			$this->addHost($newSiteId, $shortname . '.dev.lightupmylove.com');
		} 

		return $newSiteId;
	}

	public function save($site_id, $name, $shortname, $blurb, $description, $keywords, $swatch)
	{
		global $memc;
		
		$sql = "UPDATE sites SET
					name = ?,
					shortname = ?,
					blurb = ?,
					description = ?,
					keywords = ?,
					swatch = ?
				WHERE site_id = ?";
		
		$db->insertUpdate($sql, array($name, $shortname, $blurb, $description, $keywords, $swatch, $site_id));

		$memc->flush();
	}


	public function delete($siteId)
	{
		$sql = "";

		$db->insertUpdate($sql, array($siteId));
	}

	public function changeStatus($siteId, $status)
	{
		if($siteId){
			$sql = "UPDATE sites
					SET status = ?
					WHERE site_id =?";

			$siteId = $db->insertUpdate($sql, array($status, $siteId));

			return true;
		} else {
			return false;
		}
	}

	public function updateHeaderImage($siteId, $imageName)
	{
		global $memc;
		
		$sql = "UPDATE sites SET
					header_image = ?
				WHERE site_id = ?";

		$db->insertUpdate($sql, array($imageName, $siteId));

		$memc->flush('site_' . $siteId);
	}

	public function addHost($siteId, $hostname)
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

		$hostId = $db->insertUpdate($sql, array($siteId, $hostname));
	}

	public function load($host = null)
	{
		global $memc;
		
		if(!$host){
			$host = $_SERVER['HTTP_HOST'];
		}

		$sql = "SELECT s.*, h.hostname
				FROM sites AS s
				LEFT JOIN site_hosts as h
					ON s.site_id = h.site_id
				WHERE h.hostname = ?";

		$site = $memc->fetch($sql, array($host), 'fetchOne', $this->cacheLifetime);

		if(!$site){
			$this->site = $this->load('www.lightupmylove.com');
		}

		return $this->site;
	}

	public function loadById($siteId)
	{
		global $memc;
		
		$sql = "SELECT *
				FROM sites
				WHERE site_id = ?";

		$site = $memc->fetch($sql, array($siteId), 'fetchOne', $this->cacheLifetime, 'site_' . $siteId);

		if($site){
			$site->hosts = $this->loadHosts($siteId);
		}

		return $site;
	}

	public function loadHosts($siteId)
	{
		global $memc;
		
		$sql = "SELECT *
				FROM site_hosts
				WHERE site_id = ?";

		$hosts = $memc->fetch($sql, array($siteId), 'fetchAll', $this->cacheLifetime);

		//Debugger::debug($hosts, '$hosts');

		return $hosts;
	}

	public function loadAll()
	{
		global $memc;
		
		$sql = "SELECT *
				FROM sites
				WHERE status != 'deleted'";

		$sites = $db->fetchAll($sql);

		return $sites;
	}

	public function setAdmin()
	{
		$this->isAdmin = true;
	}

	public function isAdmin()
	{
		Debugger::debug('here', 'here', null, true);
		return $this->isAdmin;
	}

	public function load404()
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