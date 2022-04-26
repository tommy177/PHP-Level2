<?php

namespace app\models;

class comment
{
    public $id_com;
    public $com;
    public $name_com;
public function __construct($id_com = null, $com = null,$name_com = null)
{
    $this->id_com = $id_com;
    $this->com = $com;
    $this->name_com = $name_com;
}

    protected function getTableName()
    {
        return 'comment';
    }
}