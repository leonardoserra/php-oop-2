<?php

class Product{
    public $name;
    public $price;
    protected $discount = 0;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
}


?>