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
			array("testtest1", "lenlyle@gmail.com", "Scr0tums", "m", "94520"),
			array("testtest2", "test2@lentest.com", "Scr0tum", "f", "94104")
		);
	}




	public static  function tearDownAfterClass()
	{
		$usernames = array('testtest1', 'testtest2');	

		foreach($usernames as $username){
			$sql = "DELETE FROM users
					WHERE username = ?";

			Mysql::runQuery($sql, array($username));
		}
	}

    protected function onNotSuccessfulTest(Exception $e)
    {
        throw $e;
    }
}