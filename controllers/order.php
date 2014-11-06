<?php

class OrderController extends Controller
{

    public function indexAction ()
    {
        $model = $this->di->get('model')->getModel('order');
        $items = $model->getItems();
        
        $data = array();
        $data['items'] = $items;
        
        $view = $this->di->get('view');
        echo $view->load('header');
        echo $view->load('order', $data);
        echo $view->load('footer');
    }
}