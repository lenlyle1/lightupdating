<?php

Class Users_Ethnicity {

	public function load()
	{
		$sql = "SELECT *
				FROM ethnicities";

		$ethnicities = $memc->fetch($sql, null, 'fetchAll');

		return $ethnicities;
	}
}