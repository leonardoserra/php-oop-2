<?php 

class Game extends Product{

    public $type;
    public $dimension;


    public function __construct($name, $price, Category $category, $type, $dimension){
        parent::__construct($name, $price, $category);
        $this->type = $type;
        $this->dimension = $dimension;
    }

}

?>