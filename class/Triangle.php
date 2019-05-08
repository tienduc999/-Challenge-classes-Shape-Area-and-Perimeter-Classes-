<?php

class Triangle extends Shape
{
    private $slideA;
    private $slideB;
    private $slideC;

    public function __construct($slideA, $slideB, $slideC)
    {
        $this->slideA = $slideA;
        $this->slideB = $slideB;
        $this->slideC = $slideC;
    }

    public function calculationPerimeter()
    {
        return $this->slideA + $this->slideB + $this->slideC;
    }

    public function calculationAcreage()
    {
        $p = $this->calculationPerimeter() / 2;
        return sqrt($p*($p-$this->slideA) * ($p-$this->slideB) * ($p * $this->slideC));
    }
}

