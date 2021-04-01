<?php 
//require 'animal.php';

class Frog extends Animal{
    public function __construct($name){
        parent::__construct($name, 4);
    }
    public function jump(){
        return "Hop Hop";
    }
}

?>

