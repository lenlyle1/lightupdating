<?php

Class Errors {

	private static $errors = array();

	public function handle($e, $logfile = null)
	{
		Debugger::debug($e->getMessage(), 
						'Exception: ' . $e->getFile() . ' - ' . $e->getLine(),
						$logfile, true);

		error_log('Exception: ' . $e->getFile() . ' - ' . $e->getLine() . 
				  '|' . $e->getMessage());
	}

	public function setFormError($field, $error)
	{
		self::$errors[$field] = $error;
	}

	public function getErrors()
	{
		return self::$errors;
	}
}