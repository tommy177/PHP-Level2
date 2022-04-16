<?php

class Rectangle extends Figure
{
    public $a;
    public $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function getArea()
    {
        return "{$this->a} * {$this->b}";
    }
    public function getFigure()
    {
        return 'Прямоугольник';
    }
    public function getParam()
    {
        return "2 * ({$this->a} + {$this->b})";
    }
}