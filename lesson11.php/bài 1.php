<?php

abstract class Shape{
    abstract public function calculateArea();
}
class circle extends Shape{
    Protected $radius;
    Public function _construct($radius)
    {
        $this->radius = $radius;
    }
    Public function calculateArea()
    {
        return 3.14 * pow($this->radius, 2);
    }
}
$circle = new circle(5);
Echo "Area of circle:". $circle->calculateArea();