<?php
/**
    Event logging class
**/

Class Log {

    private $db = null;

    public function connect()
    {

    }

    public function getDb()
    {
        if(!$this->$db){
            $this->connect();
        }
        
        return $this->$db;
    }

    public function write($txt, $logfile = null)
    {

    }

    public function writeLine($txt, $file)
    {

    }

    public function debug($value, $title = null, $logfile = null)
    {
        $logfile = ($logfile) ? $logfile : 'debug';
    }

}