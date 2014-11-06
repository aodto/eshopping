<?php

class ProductModel extends Model
{

    public function getItem ($id)
    {
        return array(
                "item_id" => $id,
                "title" => "iphone 5"
        );
    }
}