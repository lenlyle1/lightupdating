<?php

Class Ajax {

	private static $response = array();

	public static function respond()
	{
		echo json_encode(self::$response);

		exit;
	}

	public static function setupResponse($error = null)
	{
		self::addError($error);
		self::setSuccess($error);
	}

	public static function addError($error)
	{
		self::$response['errors'] = $error;
	}

	public static function setSuccess($error)
	{
		$success = ($error) ? false : true;

		self::$response['success'] = $success;
	}
}