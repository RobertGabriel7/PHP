<?php


$anodenasc = isset($_POST["anoo1"])?$_POST["anoo1"]:1900;
$i = date("Y") - $anodenasc;


if($i < 16){
    
    $v = "não pode votar!";
    
}
else{


    if($i >= 16 && $i < 18 ){
        
        $v = "escolhe se quer votar ou não.";
    }
    else{
        
        $v = "pode votar!";
    }

}
echo "Você nasceu em $anodenasc e tem $i anos de idade. <br> Você $v";


















?>