<?php 
include 'ape.php';
include 'frog.php';

class Animal{
    public $legs;
    public $cold_blooded;
    public $name;
    public function __construct($name, $legs = 2, $cold_blooded = 'no'){
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }
};
?>