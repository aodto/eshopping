<?php

class IndexController extends Controller
{

    public function indexAction ()
    {
        redirect('index.php?c=listing');
    }
}