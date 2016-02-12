<?php

Class Users_Recaptcha {

	private static $secretKey = '6LefKhcTAAAAAPUhgW1-BayRRZWXMpCtcs7U3GT2';

	private static $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';

	public static function verify($response)
	{
		$payload = array(
						'secret' => self::$secretKey,
						'response' => $response,
						'remoteip' => $_SERVER['REMOTE_ADDR']
						);

		$options = array(
		        'http' => array(
		        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		        'method'  => 'POST',
		        'content' => http_build_query($payload),
		    )
		);

		$context  = stream_context_create($options);
		$result = file_get_contents(self::$verifyUrl, false, $context);
		
		Debugger::debug($result, 'google verification');

		return $result;
	}
}

/*

POST Parameter	Description
secret	Required. The shared key between your site and ReCAPTCHA.
response	Required. The user response token provided by the reCAPTCHA to the user and provided to your site on.
remoteip	Optional. The user's IP address.


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
