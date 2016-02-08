<?php

Class Validate_Post {

	public static function isPresent()
	{
		if(empty($_POST)){
			$e = new Exception('No $_POST vars');

			Errors::handle($e);

			return false;
		}

		return true;
	}
}