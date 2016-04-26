<?php
class ClonedDependencyTest extends PHPUnit_Framework_TestCase
{
    private static $dependency;

    public static function setUpBeforeClass()
    {
        $this->$dependency = new StdClass;
    }

    public function testOne()
    {
        return $this->$dependency;
    }

    /**
     * @depends testOne
     */
    public function testTwo($dependency)
    {
        $this->assertSame($this->$dependency, $dependency);
    }

    /**
     * @depends !clone testOne
     */
    public function testThree($dependency)
    {
        $this->assertSame($this->$dependency, $dependency);
    }

    /**
     * @depends clone testOne
     */
    public function testFour($dependency)
    {
        $this->assertNotSame($this->$dependency, $dependency);
    }
}
