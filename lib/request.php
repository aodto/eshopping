<?php

class Request extends Base
{

    public function get ($key = null)
    {
        if (is_null($key)) {
            return $_GET;
        }
        if (! isset($_GET[$key])) {
            if ($key === 'c' || $key === 'action') {
                return 'index';
            }
        }
        return $_GET[$key];
    }

    public function post ($key = null)
    {
        if (is_null($key)) {
            return $_POST;
        }
        return $_POST[$key];
    }
}