<?php

class Treugle extends Figure
{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getParam()
    {
        return "{$this->a} + {$this->b} + {$this->c}";
    }

    public function getFigure()
    {
        return 'Треугольник';
    }

    public function getArea()
    {
        return "{$this->a} * {$this->b} / 2";
    }


}