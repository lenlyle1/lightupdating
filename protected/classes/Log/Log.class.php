<?php
/**
    Event logging class
**/

Class Log {

    private static $db = null;

    public static function connect()
    {

    }

    public static function getDb()
    {
        if(!self::$db){
            self::connect();
        }
        
        return self::$db;
    }

    public static function write($txt, $logfile = null)
    {

    }

    public static function writeLine($txt, $file)
    {

    }

    public static function debug($value, $title = null, $logfile = null)
    {
        $logfile = ($logfile) ? $logfile : 'debug';
    }

}