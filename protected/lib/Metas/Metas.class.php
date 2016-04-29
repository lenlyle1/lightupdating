<?php

Class Metas {

	public function loadUser()
	{
		$metas = $this->loadAll('user');

        return $metas;
	}

	public function loadSite()
	{
		$metas = $this->loadAll('site');
        
        return $metas;
	}

	public function loadAll($scope = null)
	{
		$sql = "SELECT i.*, g.name AS group_name
				FROM meta_items AS i
				LEFT JOIN meta_groups AS g
					ON i.group_id = g.group_id
				WHERE scope = ?
				ORDER BY name ASC";

		$memcflush('allMetas' . $scope);

		$metas = $memc->fetch($sql, array($scope), 'fetchAll', 60*60*24*30, 'allMetas' . $scope);
		
		//$metas = $db->fetchAll($sql, array($scope));

		Debugger::debug($metas);
		return $metas;
	}

    public function loadSiteMetas($siteId)
    {
        $sql = "SELECT meta_id
                FROM site_metas
                WHERE site_id = ?";

        $siteMetas = $db->fetchAll($sql, array($siteId));

        Debugger::debug($siteMetas);

        return $siteMetas;
    }

	public function changeSiteMeta($action, $metaId, $siteId)
	{
		if($action == 'add'){
			$sql = "INSERT INTO site_metas (
						meta_id,
						site_id
					) VALUES (
						?,
						?
					)";
		} else if($action == 'remove'){
			$sql = "DELETE FROM site_metas
					WHERE meta_id = ?
					AND site_id = ?";
		}

		$result = $db->insertUpdate($sql, array($metaId, $siteId));

		return $result;
	}
}