<?php

class Rhombus extends Shape
{
    private $length;
    private $diagonalLine1;
    private $diagonalLine2;

    public function __construct($length, $diagonalLine1, $diagonalLine2)
    {
        $this->length = $length;
        $this->diagonalLine1 = $diagonalLine1;
        $this->diagonalLine2 = $diagonalLine2;
    }

    public function calculationPerimeter()
    {
        return $this->length * 4;
    }

    public function calculationAcreage()
    {
        return ($this->length *$this->length)/2;
    }
}

