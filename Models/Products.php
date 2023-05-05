<?php
require_once __DIR__ . '/Categories.php';



class Product{
    public $name;
    public $price;
    public $discount = 0;
    public $category;


    public function __construct($name, $price, Category $categories){
        $this->name = $name;
        $this->price = $price;
        $this->category = $categories;
    }
}



?>