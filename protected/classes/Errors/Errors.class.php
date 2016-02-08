<?php

Class Errors {

	private static $errors = array();

	public static function handle($e, $logfile = null)
	{
		Debugger::debug($e->getMessage(), 
						'Exception: ' . $e->getFile() . ' - ' . $e->getLine(),
						$logfile, true);

		error_log('Exception: ' . $e->getFile() . ' - ' . $e->getLine() . 
				  '|' . $e->getMessage());
	}

	public static function setFormError($field, $error)
	{
		self::$errors[$field] = $error;
	}

	public static function getErrors()
	{
		return self::$errors;
	}
}