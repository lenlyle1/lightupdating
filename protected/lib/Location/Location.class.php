<?php

Class Location {

	public function GeoIPAddress()
	{
		$ip = $_SERVER['REMOTE_ADDR'];

		$location = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

		Debugger::debug($location);

		return $location;
	}
}