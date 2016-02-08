<?php

Class Ajax {

	public static function respond($response)
	{
		echo json_encode($response);

		exit;
	}

	public static function setupResponse()
	{
		$response = array(
			'error' => '',
			'success' => false
		);

		return $response;
	}
}