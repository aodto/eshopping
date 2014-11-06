<?php

class Session extends Base
{

    public function get ($key = null)
    {
        return $_SESSION[$key];
    }

    public function set ($key = null, $val = null)
    {
        $_SESSION($key, $val);
    }

    public function clear ($key = null)
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }
    public function destroy ()
    {
        session_unset();
        session_destroy();
    }
}