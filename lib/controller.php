<?php

class Controller extends Base
{

    public $controller = null;

    public function load ($name)
    {
        $controllerPath = ROOT_PATH . DS . 'controllers' . DS . $name . '.php';
        if (file_exists($controllerPath)) {
            include $controllerPath;
        }
        $controllerClass = ucfirst($name) . 'Controller';
        $this->controller = new $controllerClass();
        $this->controller->setDI($this->di);
    }

    public function execute ($action)
    {
        $controllerAction = $action . 'Action';
        $this->controller->$controllerAction();
    }
    
    // default action
    public function indexAction ()
    {}
}