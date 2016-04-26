<?php

class mysqlTest extends \PHPUnit_Framework_TestCase 
{	
	public function testConnect()
	{
		$testdb = new Mysql();

		$this->assertInstanceOf('Mysql', $testdb);
	}
}