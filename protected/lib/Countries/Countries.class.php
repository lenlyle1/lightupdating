<?php

Class Countries {

	public function load()
	{
		global $memc;
		
		$sql = "SELECT *
				FROM countries";

		$countries = $memc->fetch($sql, null, 'fetchAll');

		return $countries;
	}
}