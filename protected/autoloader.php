<?php
spl_autoload_register(function ($class) {
    if(strstr($class, 'Smarty')){
        return;
    }
    try {
        if(strstr($class, "_") && substr_count($class, "_") == 1){
            $classBits = split("_", $class);
            if(file_exists(SITE_ROOT . '/protected/classes/' . $classBits[0] . '/' . $classBits[1] . '.class.php')){
                include SITE_ROOT . '/protected/classes/' . $classBits[0] . '/' . $classBits[1] . '.class.php';
            } else {
                throw new Exception(SITE_ROOT . '/protected/classes/' . $classBits[0] . '/' . $classBits[1] . '.class.php');
            }
        }else if(file_exists(SITE_ROOT . '/protected/classes/' . $class . '/' . $class . '.class.php')){
            include SITE_ROOT . '/protected/classes/' . $class . '/' . $class . '.class.php';
        } else {
            throw new Exception(SITE_ROOT . '/protected/classes/' . $class . '/' . $class . '.class.php');
        }
    } catch (Exception $e){
        Errors::handle($e);
        die('class not found - ' . $class);
    }
});
