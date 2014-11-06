<?php

class Model extends Base
{

    public $model = null;

    public function getModel ($name)
    {
        $modelPath = ROOT_PATH . DS . 'models' . DS . $name . '.php';
        if (file_exists($modelPath)) {
            include $modelPath;
        }
        $modelClass = ucfirst($name) . 'Model';
        $this->model = new $modelClass();
        $this->model->setDI($this->di);
        return $this->model;
    }
}