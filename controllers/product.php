<?php

class ProductController extends Controller
{

    public function indexAction ()
    {
        $view = $this->di->get('view');
        echo $view->load('header');
        echo $view->load('product');
        echo $view->load('footer');
    }
    public function viewAction(){
        $id = $this->di->get('request')->get('id');
        
        $model = $this->di->get('model')->getModel('product');
        $item = $model->getItem($id);
        
        $data = array();
        $data['item'] = $item;
        
        $view = $this->di->get('view');
        echo $view->load('header');
        echo $view->load('product', $data);
        echo $view->load('footer');
    }
}