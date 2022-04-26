<?php

namespace app\models;

class basket
{
public $session_id;
public $prod_id;
public $price;

public function __construct($session_id = null, $prod_id = null,$price = null)
{
    $this->session_id = $session_id;
    $this->prod_id = $prod_id;
    $this->price = $price;
}
protected function getTableName()
{
    return 'basket';
}
}