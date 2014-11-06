<?php

class CartModel extends Model
{

    public function getItems ()
    {
        return array(
                array(
                        "title" => "iphone 5"
                ),
                array(
                        "title" => "iphone 6"
                )
        );
    }
}