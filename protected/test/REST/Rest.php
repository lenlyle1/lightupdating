<?php

namespace REST\Tests;

class RESTTest extends \PHPUnit_Framework_TestCase 
{
	/**
	 * @dataProvider providerGetEndpoints
	 */
	public function testGetEndpoint($class, $function, $expected)
	{
		$endpoint = \API_Endpoints::get($class, $function);

		$this->expectOutputString($expected);

		print $endpoint;
	}

	public function providerGetEndpoints()
	{
		return array(
			array("user", 'login', '/api/user/login')
		);
	}

	/**
	 * @dataProvider providerTestCurlCall
	 */
	public function testCurlCall($endpoint, $data)
	{
		$curlResponse = \API_Rest::curlCall('http://dev.lightupmylove.com/' . $endpoint, $data);

		$this->assertNotNull($curlResponse);
	}

	public function providerTestCurlCall()
	{
		return array(
			array('/api/user/load/1/', null)
		);
	}
}