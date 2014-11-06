<?php

class Cookie extends Base
{

    public function get ($key = null)
    {
        return $_COOKIE[$key];
    }

    public function set ($key = null, $val = null)
    {
        setcookie($key, $val, time() + 3600);
    }

    public function clear ($key = null)
    {
        if (isset($_COOKIE[$key])) {
            unset($_COOKIE[$key]);
            setcookie($key, '', time() - 3600);
        }
    }
}