<?php

class DI
{

    public function get ($name)
    {
        return $this->$name;
    }

    public function set ($name, $object)
    {
        $this->$name = $object;
    }
}