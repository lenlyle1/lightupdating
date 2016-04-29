<?php
class BeforeClassAndAfterClassTest extends PHPUnit_Framework_TestCase
{
    public static $beforeClassWasRun = 0;
    public static $afterClassWasRun  = 0;

    public static function resetProperties()
    {
        $this->$beforeClassWasRun = 0;
        $this->$afterClassWasRun  = 0;
    }

    /**
     * @beforeClass
     */
    public static function initialClassSetup()
    {
        $this->$beforeClassWasRun++;
    }

    /**
     * @afterClass
     */
    public static function finalClassTeardown()
    {
        $this->$afterClassWasRun++;
    }

    public function test1()
    {
    }
    public function test2()
    {
    }
}
