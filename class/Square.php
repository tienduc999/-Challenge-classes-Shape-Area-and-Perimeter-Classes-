<?php
class Square extends Shape {
    private $width;

    public function __construct($width)
    {
        $this->width = $width;
    }

    public function calculationPerimeter()
    {
        return $this->width * 4;
    }

    public function calculationAcreage()
    {
        return $this->width * $this->width;
    }
}
