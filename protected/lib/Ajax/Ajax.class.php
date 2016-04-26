<?php

Class Ajax {

	private $response = array();

	public function respond()
	{
		echo json_encode($this->$response);

		exit;
	}

	public function setupResponse($error = null)
	{
		$this->addError($error);
		$this->setSuccess($error);
	}

	public function addError($error)
	{
		$this->$response['errors'] = $error;
	}

	public function setSuccess($error)
	{
		$success = ($error) ? false : true;

		$this->$response['success'] = $success;
	}
}