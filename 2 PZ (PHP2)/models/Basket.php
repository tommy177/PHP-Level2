<?php

namespace app\models;

class Basket
{
    public $id;
    public $session_id;
    public $prod_id;
    public $price;

public function __construct($id, $session_id, $prod_id, $price)
{
    $this->id = $id;
    $this->session_id = $session_id;
    $this->prod_id = $prod_id;
    $this->price = $price;
}

    protected function getTableName()
    {
        return 'basket';
    }
}