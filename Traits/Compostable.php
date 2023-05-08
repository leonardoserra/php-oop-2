<?php

trait Compostable{

    public $biologic;

    public function setCompostability($biologic){
        $this->biologic = $biologic;
    }

    public function getCompostability($productName){
        if($this->biologic){
            return "il prodotto è biodegradabile";
        }else{
            return "<br/> il prodotto $productName va smaltito correttamente";
        }
    }
}