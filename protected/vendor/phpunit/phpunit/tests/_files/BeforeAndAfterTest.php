<?php
class BeforeAndAfterTest extends PHPUnit_Framework_TestCase
{
    public static $beforeWasRun;
    public static $afterWasRun;

    public static function resetProperties()
    {
        $this->$beforeWasRun = 0;
        $this->$afterWasRun  = 0;
    }

    /**
     * @before
     */
    public function initialSetup()
    {
        $this->$beforeWasRun++;
    }

    /**
     * @after
     */
    public function finalTeardown()
    {
        $this->$afterWasRun++;
    }

    public function test1()
    {
    }
    public function test2()
    {
    }
}
