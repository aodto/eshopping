<?php

class CartController extends Controller
{

    public function indexAction ()
    {
        $model = $this->di->get('model')->getModel('cart');
        $items = $model->getItems();
        
        $data = array();
        $data['items'] = $items;
        
        $view = $this->di->get('view');
        echo $view->load('header');
        echo $view->load('cart', $data);
        echo $view->load('footer');
    }
}