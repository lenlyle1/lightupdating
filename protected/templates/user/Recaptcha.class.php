<?php

Class Recaptcha {

	private static $secretKey = '6LefKhcTAAAAAPUhgW1-BayRRZWXMpCtcs7U3GT2';

	private static $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';

	public static function verify($response)
	{
		
	}
}

/*
API Response

The response is a JSON object:

{
  "success": true|false,
  "error-codes": [...]   // optional
}
Error code reference

Error code	Description
missing-input-secret	The secret parameter is missing.
invalid-input-secret	The secret parameter is invalid or malformed.
missing-input-response	The response parameter is missing.
invalid-input-response	The response parameter is invalid or malformed.
*/
