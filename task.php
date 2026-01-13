<?php


class Shape
{

    protected ?float $lenth;
    protected ?float $width;


    public function __construct(float|int $lenth , float|int $width)
    {
        $this->lenth = $lenth;
        $this->width = $width;
    }

    public function getArea()
    {
        // code...
    }
}
class Rectangle extends Shape
{
    public function __construct(float|int $lenth, float|int $width)
    {
        parent::__construct($lenth , $width);
    }
    
    public function getArea(): float|int {
        return $this->lenth * $this->width;
    }
}
class Cricle extends Shape
{


    public function getArea()
    {
        return $this->lenth * $this->width;
    }
}
