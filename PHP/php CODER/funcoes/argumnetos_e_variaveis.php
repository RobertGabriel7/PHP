<?php


function soma($a,$b){

   return $a+$b;

}

echo soma(4,3);

/* para somar todos os valores */

function somafull(...$numeros){
        foreach ($numeros as $num) {
            # code...
        }
}


function valores(...$numeros){
    $soma = 0;
    foreach($numeros as $num){
    
        $soma += $num;
    }
    return $soma;
}
echo "<hr>";

echo valores(1,2,3,5,4,7,7,1);

echo "<br><hr>";

function membros($titular,...$dependentes){
    echo "Titular: ",$titular,"<br>";
    if($dependentes){
        foreach($dependentes as $depe){
            echo "Dependentes: ",$depe,"<br>";
        }
    }

}

echo membros("Robert e Elisa","davi","alice");