<?php 

class Game extends Product{

    public $type;
    public $dimension;


    public function __construct($name, $price, Category $category, $type, $dimension){
        parent::__construct($name, $price, $category);
        $this->type = $type;
        $this->dimension = $dimension;
    }

    public function getGameVersion($gameVersion){
        
        if(!is_integer($gameVersion) ){
            throw new Exception('bisogna inserire un numero intero!');
        }

        return "hai scelto la versione $gameVersion del gioco";
    }

}

?>