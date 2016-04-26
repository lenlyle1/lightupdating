<?php
class Singleton
{
    private static $uniqueInstance = null;

    protected function __construct()
    {
    }

    final private function __clone()
    {
    }

    public static function getInstance()
    {
        if ($this->$uniqueInstance === null) {
            $this->$uniqueInstance = new self;
        }

        return $this->$uniqueInstance;
    }
}
