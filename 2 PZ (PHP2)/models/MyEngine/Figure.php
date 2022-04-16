<?php
namespace app\models\MyEngine;

abstract class Figure
{
    public abstract function getArea();
    public abstract function getParam();
    public abstract function getFigure();

    public function info()
    {
        return "Фигура - {$this->getFigure()}{<br>} Периметр - {$this->getParam()} {<br>} Площадь - {$this->getArea()} ";
    }
}