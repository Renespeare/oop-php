<?php 
require 'animal.php';

// Release 0
$sheep = new Animal("shaun", 4);

echo "Nama: " . $sheep->name . "<br>"; // "shaun"
echo "Legs: " . $sheep->legs . "<br>"; // 4
echo "Cold Blooded: " . $sheep->cold_blooded . "<br><br>"; // "no"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

// Release 1
$kodok = new Frog("buduk");
echo "Nama: " . $kodok->name . "<br>"; 
echo "Legs: " . $kodok->legs . "<br>"; 
echo "Cold Blooded: " . $kodok->cold_blooded . "<br>"; 
echo "Jump: " . $kodok->jump() . "<br><br>" ; // "hop hop"

$sungokong = new Ape("kera sakti");
echo "Nama: " . $sungokong->name . "<br>"; 
echo "Legs: " . $sungokong->legs . "<br>"; 
echo "Cold Blooded: " . $sungokong->cold_blooded . "<br>"; 
echo "Yell: " . $sungokong->yell() . "<br>"; // "Auooo"


?>