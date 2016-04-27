<?php

class restUserTest extends \PHPUnit_Framework_TestCase 
{
	/**
	 * @dataProvider providerTestCreate
	 */
	public function testCreateUser($username, $email, $password, $gender, $postcode )
	{
		$endpoint = \API_Endpoints::get('user', 'create');

		$postVars = array(
			'username' => $username,
			'password' => $password,
			'email'    => $email,
			'gender'   => $gender,
			'postcode' => $postcode
		);

		$responseJSON = \API_Rest::curlCall($endpoint, $postVars);

		$response = json_decode($responseJSON);

		$this->assertInternalType('int', $userId);
	}
	
	public function providerTestCreate()
	{
		return array(
			array("testtest1", 
				  "test1@lentest.com", 
				  "Scr0tums", 
				  "m", 
				  "94520")
		);
	}

	/**
	 * @dataProvider providerTestCreate
	 */
	public function testGetByEmail($username, $email, $password, $gender, $postcode)
	{		
		$endpoint = \API_Endpoints::get('user', 'fetch_by_email');
		$endpoint .= \API_Endpoints::append($endpoint, $email);

		
	}

	public function testDeleteUser()
	{
		$endpoint = \API_Endpoints::get('user', 'wipe');
	}
}