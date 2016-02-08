<?php

Class Users_Ethnicity {

	public static function load()
	{
		$sql = "SELECT *
				FROM ethnicities";

		$ethnicities = Memc::fetch($sql, null, 'fetchAll');

		return $ethnicities;
	}
}