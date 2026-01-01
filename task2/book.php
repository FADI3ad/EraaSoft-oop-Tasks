<?php 

require_once "index.php";




class Book extends Product{

    private $publishers = [];

    public $writer;

    public $color;

    public $supplier;

    public function __construct($name, $price, $description, $writer, $color, $supplier)
    {
        parent::__construct($name, $price, $description);
        $this->writer = $writer;
        $this->color = $color;
        $this->supplier = $supplier;
    }

    public function choosePublisher()
    {
        if(empty($this->publishers)) {
            return null;
        }
        return $this->publishers [rand(0,count($this->publishers) - 1 )];
    }
    public function setPublisher($publisherName)
    {
        $this->publishers [] = $publisherName;
    }
    public function showAllPublisher()
    {
        return $this->publishers;
    }

}
$book1 = new Book("book1", 100, "description1", "writer1", "color1", "supplier1");
$book2 = new Book("book2", 200, "description2", "writer2", "color2", "supplier2");
$book3 = new Book("book3", 300, "description3", "writer3", "color3", "supplier3");

$book1->setPublisher("publisher1");
$book1->setPublisher("publisher2");
$book1->setPublisher("publisher3");

echo $book1->choosePublisher() . "\n";

var_dump($book1->showAllPublisher());