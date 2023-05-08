<?php 

require_once __DIR__ . '/../Traits/Compostable.php';
class Food extends Product{

    use Compostable;
    public $type;
    public $quantity;

    public function __construct($name, $price, Category $category, $type, $quantity){
        parent::__construct($name, $price, $category);
        $this->type = $type;
        $this->quantity = $quantity;
    }

   
}

?>