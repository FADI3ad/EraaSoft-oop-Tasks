<?php

require_once "index.php";

class Babycar extends Product
{

    public $age;
    public $weight;

    private $materials = [];

    private $specialTax;


    public function __construct($name, $price, $description, $age, $weight, $specialTax){
        parent::__construct($name, $price, $description);
        $this->age = $age;
        $this->weight = $weight;
        $this->specialTax = $specialTax;
    }

    public function displayMaterials()
    {
        return $this->materials;
    }
    public function getFinalPrice()
    {
        $finalprice = $this->price + $this->tax + $this->specialTax;
        return $finalprice;
    }
    public function setMaterials($material)
    {
        $this->materials[] = $material;
    }
}

$babycar = new Babycar("Babycar", 1000, "Babycar", 1, 200, 100);

echo $babycar->getFinalPrice();
