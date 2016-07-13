<?php

namespace Lib\Utils;

Class Session {

    public function set($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public function get($name)
    {
        return (isset($_SESSION[$name])) ? $_SESSION[$name] : null;
    }

    public function wipe($name)
    {
        unset($_SESSION[$name]);
    }
    public function wipeAll()
    {
        unset($_SESSION);
    }
}