<?php

Class Users_Countries {

	public function load()
	{
		$sql = "SELECT *
				FROM countries";

		$countries = $memc->fetch($sql, null, 'fetchAll');

		return $countries;
	}
}