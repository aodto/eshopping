<?php

class Config extends Base
{

    public $configData = null;

    public function __construct ()
    {
        $this->configData = include ROOT_PATH . DS . 'config.php';
    }

    public function get ($key = null)
    {
        if (is_null($key)) {
            return $this->configData;
        }
        return $this->configData[$key];
    }
}