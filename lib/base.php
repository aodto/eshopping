<?php

class Base
{

    public $di = null;

    public function setDI ($di)
    {
        $this->di = $di;
    }

    public function getDI ()
    {
        return $this->di;
    }
}