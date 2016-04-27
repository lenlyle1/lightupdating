<?php

Class Users_Ethnicity {

	public function load()
	{
		global $memc;

		$sql = "SELECT *
				FROM ethnicities";

		$ethnicities = $memc->fetch($sql, null, 'fetchAll');

		return $ethnicities;
	}
}