<?php

use Lib\Utils\Debugger;
/*
    Namespace autoloader
*/

class Autoloader 
{
    static public function loader($className) 
    {
        if(strstr($className, 'Faker\\Provider')){
            return false;
        }
        $filename = "/App/" . str_replace('\\', '/', $className) . ".php";
        if (file_exists(SITE_ROOT . $filename)) {
            require_once(SITE_ROOT . $filename);
            if (class_exists($className)) {
                return TRUE;
            }
        } else {
            Debugger::debug('Class ' . SITE_ROOT . $filename . ' not found');
        }

        return FALSE;
    }
}

spl_autoload_register('Autoloader::loader');

function dump($s){
    echo "<pre>";
    print_r($s);
    echo "</pre>";
}