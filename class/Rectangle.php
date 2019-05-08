<?php

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length,$width)
    {
        $this->length =$length;
        $this->width =$width;
    }

    public function calculationPerimeter()
    {
        return $this->length * $this->width;
    }

    public function calculationAcreage()
    {
        return ($this->length +$this->width) *2;
    }
}
