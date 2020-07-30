<?php 
    require("./animal.php");
    require_once("./ape.php");
    require_once("./frog.php");

    $sheep = new Animal("Shaun");
   
    echo $sheep->name; // "shaun"
    echo $sheep->legs; // 2
    echo $sheep->cold_blooded. "<br>"; // false

    $sungokong = new Ape("kera sakti");
    $sungokong->yell(); // "Auooo"

    $kodok = new Frog("buduk");
    $kodok->jump(); // "hop hop"
?>