<?php

class View extends Base
{

    public function load ($viewName = null, $parameter = null)
    {
        if (! is_null($parameter)) {
            foreach ($parameter as $key => $val) {
                $this->$key = $val;
            }
        }
        
        $viewPath = ROOT_PATH . DS . 'views' . DS . $viewName . '.php';
        $buffer = null;
        if (file_exists($viewPath)) {
            ob_start();
            include $viewPath;
            $buffer = ob_get_contents();
            @ob_end_clean();
        }
        return $buffer;
    }
}