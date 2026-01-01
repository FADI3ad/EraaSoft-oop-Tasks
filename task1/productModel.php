<?php

class Product
{
    public $name;
    public $price;
    public $brand;
    public $imagePath;
    public $description;
    public $tax;

    function __construct($name, $price, $brand, $imagePath, $description, $tax)
    {
        $this->name =  $name;
        $this->price =  $price;
        $this->brand =  $brand;
        $this->imagePath =  $imagePath;
        $this->description =  $description;
        $this->tax =  $tax;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getImage()
    {
        return $this->imagePath;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getBrand()
    {
        return $this->brand;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function getPriceAfterDiscount($number)
    {
        $this->price -= $number;
    }
    public function getFinalPrice()
    {
        $finalprice = $this->price + $this->tax;
        return $finalprice;
    }
}
$p1 = new Product("bag", 200, "adidas", "/images/im1.jpg", "Red Big Bag", 20);
$p2 = new Product("shoes", 350, "nike", "/images/im2.jpg", "Black Sport Shoes", 15);
$p3 = new Product("jacket", 500, "puma", "/images/im3.webp", "Winter Jacket Blue", 10);

