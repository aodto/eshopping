<?php

class CheckoutController extends Controller
{

    public function indexAction ()
    {
        $view = $this->di->get('view');
        echo $view->load('header');
        echo $view->load('checkout');
        echo $view->load('footer');
    }
}