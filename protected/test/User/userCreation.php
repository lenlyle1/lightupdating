<?php

//namespace User;



class UserCreationTest extends \PHPUnit_Framework_TestCase 
{
	/**
	 * @dataProvider providerTestCreate
	 */
	public function testCreateUser($username, $email, $password, $gender, $zipcode )
	{
		$endpoint = \API_Endpoints::get('user', 'create');

		$user = new User();
		$userId = $user->create($username, $email, $password, $gender, $zipcode);
		//$valid = false;
		echo gettype($userId);
		\Debugger::debug($userId, 'user id');
		$this->assertInternalType('int', $userId);


	}
	

	public function providerTestCreate()
	{
		return array(
			array("testtest1", "test1@lentest.com", "Scr0tums", "m", "94520"),
			array("testtest2", "test2@lentest.com", "Scr0tums", "f", "94104")
		);
	}

	/**
	 * @dataProvider providerTestCreateFail
	 */
	public function testCreateUserFail($username, $email, $password, $gender, $zipcode )
	{
		\Debugger::debug($email, 'testing user create fail');
		$endpoint = \API_Endpoints::get('user', 'create');

		$user = new User();
		$userId = $user->create($username, $email, $password, $gender, $zipcode);
		//$valid = false;
		$this->assertFalse($userId);
	}
	

	public function providerTestCreateFail()
	{
		return array(
			array("testtest1", "lenlyle@gmail.com", "Scr0tums", "m", "94520"),
			array("testtest2", "test2@lentest.com", "Scr0tum", "f", "94104")
		);
	}
}