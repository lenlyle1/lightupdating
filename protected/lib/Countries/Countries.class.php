<?php

Class Countries {

	public function load()
	{
		$sql = "SELECT *
				FROM countries";

		$countries = $memc->fetch($sql, null, 'fetchAll');

		return $countries;
	}
}