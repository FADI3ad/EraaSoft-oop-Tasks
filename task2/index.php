<?php


class Product
{
    public $name;
    public $price;

    public $description;

    public $image;


    function __construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }
    public function uploadImage($image)
    {
        $this->image = $image;
    }
    public function calcPrice()
    {
        return $this->price;
    }
}
