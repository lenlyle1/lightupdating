<?php
spl_autoload_register(function ($class) {
    //Debugger::debug($class);
    //echo $class;
    if(strstr($class, 'Smarty') || strstr($class, 'Composer')){
        return;
    }
    if(strstr($class, 'Composer')){
        return;
    }
    try {
        if(strstr($class, "_") && substr_count($class, "_") == 1){
            $classBits = split("_", $class);
            if(file_exists(CLASS_PATH . $classBits[0] . '/' . $classBits[1] . '.class.php')){
                include CLASS_PATH . $classBits[0] . '/' . $classBits[1] . '.class.php';
            } else {
                throw new Exception(CLASS_PATH . $classBits[0] . '/' . $classBits[1] . '.class.php');
            }
        }else if(file_exists(CLASS_PATH . $class . '/' . $class . '.class.php')){
            include CLASS_PATH . $class . '/' . $class . '.class.php';
        } else {
            throw new Exception(CLASS_PATH . $class . '/' . $class . '.class.php');
        }
    } catch (Exception $e){
        echo CLASS_PATH . "\n";
        //Errors::handle($e);
        if(!defined('IN_API')){
            die('class not found' . ((!IS_LIVE) ? ' - ' . CLASS_PATH . $class : ''));
        }
    }
}, false);
