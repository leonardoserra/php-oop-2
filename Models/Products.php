<?php
require_once __DIR__ . 'Category.php';
// $dog = new Category('dog');

class Product{
    public $name;
    public $price;
    protected $discount = 0;


    public function __construct($name, $price, Category $dog){
        $this->name = $name;
        $this->price = $price;
    }
}


?>