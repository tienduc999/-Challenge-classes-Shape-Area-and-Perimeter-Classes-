<?php
class Circle extends Shape {
    private $radius;

    public function __construct($radius)
    {
        $this->radius =$radius;
    }

    public function calculationPerimeter()
    {
        return $this->radius * 3.14 * 2;
    }

    public function calculationAcreage()
    {
        return $this->radius * $this->radius * 3.14;
    }
}
