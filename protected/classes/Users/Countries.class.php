<?php

Class Users_Countries {

	public static function load()
	{
		$sql = "SELECT *
				FROM countries";

		$countries = Memc::fetch($sql, null, 'fetchAll');

		return $countries;
	}
}