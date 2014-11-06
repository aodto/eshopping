<?php

class ListingController extends Controller
{

    public function indexAction ()
    {
        $model = $this->di->get('model')->getModel('listing');
        $items = $model->getItems();
        
        $data = array();
        $data['firstname'] = 'aodto';
        $data['items'] = $items;
        
        $view = $this->di->get('view');
        echo $view->load('header');
        echo $view->load('listing', $data);
        echo $view->load('footer');
    }
}