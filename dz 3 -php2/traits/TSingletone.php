<?php

namespace app\traits;

trait TSingletone
{
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}