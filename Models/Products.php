<?php
require_once __DIR__ . '/Categories.php';



class Product{
    public $name;
    public $price;
    public $type = 'general';
    protected $discount = 0;
    public $category = 'general';
    public $img_url;


    public function __construct($name, $price, Category $category){
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

}



?>