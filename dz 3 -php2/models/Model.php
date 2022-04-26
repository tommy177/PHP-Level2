<?php

namespace app\models;

use app\engine\Db;
use app\interfaces\IModel;

abstract class Model implements IModel
{

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function insert()
    {
        $col1 = [];
        $col2 = [];
        foreach ($this as $key => $value) {
            if($key == 'id') continue;
            $col1[':' . $key] = $value;
            $col2[] = $key;
        }
        $col3 = implode(', ',array_keys($col1));
        $col2 = implode(', ',$col2);

        $tableName = $this->getTableName();

        $sql = "INSERT INTO `{$tableName}`($col2) VALUES ($col3)";
        var_dump($sql);

        Db::getInstance()->execute($sql, $col1);
        $this->id = Db::getInstance()->lastInsertId();
    }

    protected abstract function getTableName();

    public function delete()
    {
        $tableName = $this->getTableName();
        $sql = "DELETE FROM $tableName WHERE id = :id";
        return Db::getInstance()->execute($sql, ['id' => $this->id]);
    }

    public function getOne($id)
    {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = :id";
//        return Db::getInstance()->queryOne($sql, ['id' => $id]);
         return Db::getInstance()->queryOneObject($sql, ['id' => $id], static::class);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->getTableName()}";
        return Db::getInstance()->queryAll($sql);
    }


}