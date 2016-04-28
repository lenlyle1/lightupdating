<?php

class UserCreationTest extends \PHPUnit_Framework_TestCase 
{

	/**
	 * @dataProvider providerTestCreate
	 */
	public function testCreateUser($username, $email, $password, $gender, $postcode )
	{
		$user = new User();
		$response = $user->create($username, $email, $password, $gender, $postcode);
		//$valid = false;
		echo gettype($response);
		\Debugger::debug($response, 'response');
		$this->assertInternalType('int', $response);
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
	 * @dataProvider providerTestCreateFail
	 */
	public function testCreateUserFail($username, $email, $password, $gender, $postcode )
	{
		$user = new User();
		$userId = $user->create($username, $email, $password, $gender, $postcode);
		$this->assertFalse($userId);
	}
	

	public function providerTestCreateFail()
	{
		return array(
			array("testtest2", "test2@lentest.com", "Scr0tum", "f", "94104")
		);
	}


	public static  function tearDownAfterClass()
	{
		$emails = array('test1@lentest.com');	

		foreach($emails as $email){
			$user = User_Factory::getByEmail($email);

			User_Factory::wipeUser($user->user_id);
		}
	}

    protected function onNotSuccessfulTest(Exception $e)
    {
        throw $e;
    }
}