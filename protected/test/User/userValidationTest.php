<?php



class UserValidationTest extends \PHPUnit_Framework_TestCase 
{
	 public function run(PHPUnit_Framework_TestResult $result = NULL)
    {
        $this->setPreserveGlobalState(false);
        return parent::run($result);
    }
	/**
	 * @dataProvider providerTestValidateUsernames
	 */
	public function testValidateUsername($username, $expectedResponse)
	{
		$user = new User();
		$valid = $user->validateUsername($username);

		$this->assertThis($valid, $expectedResponse);
	}

	public function providerTestValidateUsernames()
	{
		return array(
			array("shy", 'false'),
			array("in valid", 'false'),
			array("wrong#@$%@#%", 'false'),
			array("waytoomanycharacters", 'false'),
			array("good_user", 'true'),
			array("goodusername", 'true')
		);
	}

	/**
	 * @dataProvider providerTestValidateEmails
	 */
	public function testValidateEmail($email, $expectedResponse)
	{
		$user = new User();
		$valid = $user->validateEmail($email);

		$this->assertThis($valid, $expectedResponse);
	}

	public function providerTestValidateEmails()
	{
		return array(
			array("email", 'false'),
			array("email@domain", 'false'),
			array("email test@domain", 'false'),
			array("@domain.com", 'false'),
			array("domain.com", 'false'),
			array("emailtest@domain.com", 'true')
		);
	}

	/**
	 * @dataProvider providerTestValidatePasswords
	 */
	public function testValidatePassword($password, $expectedResponse)
	{
		$user = new User();
		$valid = $user->validatePassword($password);

		$this->assertThis($valid, $expectedResponse);
	}

	public function providerTestValidatePasswords()
	{
		return array(
			array("short", 'false'),
			array("in valid", 'false'),
			array("justletters", 'false'),
			array("justnumbers", 'false'),
			array("l0w3rcaseonly", 'false'),
			array("G00dpassword", 'true')
		);
	}

	public function assertThis($valid, $expectedResponse)
	{
		$assertFunction = 'assert' . ucwords($expectedResponse);

		$this->$assertFunction($valid);
	}
}