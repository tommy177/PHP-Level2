<?php

class Circle extends Figure
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getArea()
    {
        return "3,14 * pow({$this->radius},2)";
    }
    public function getFigure()
    {
        return 'круг';
    }
    public function getParam()
    {
        return "2 * {$this->radius} * 3,14";
    }
}