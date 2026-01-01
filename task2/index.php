<?php


class Product
{
    protected $name;
    protected $price;

    protected $description;

    protected $image;


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
