<?php
require_once __DIR__ . 'Models/Products.php';

class Category{
    
    public $animal;

    public function __construct($animal){
        $this->animal = $animal;
    }

}


?>