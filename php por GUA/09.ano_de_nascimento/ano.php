<?php

$anodenasc = isset($_POST["anoo"])?$_POST["anoo"]:1900;
$i = date("Y");
echo "Você nasceu em $anodenasc e tem $i anos de idade.";

if($i >= 18){
    
    $votar = "já pode votar";
    $dirigir = "já pode dirigir";
}
else{

    $votar = "não pode votar";
    $dirigir = "não pode dirigir";
}










echo "<br> Com essa idade vc $votar e também $dirigir.";

















?>