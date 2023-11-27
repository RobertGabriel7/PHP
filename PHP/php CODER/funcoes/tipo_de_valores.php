<?php

function somar($a,$b){

    echo "Somando $a + $b é: ",$a + $b,"<br>";
}

somar(3,4);
somar(10,10);
somar(7.5,10.2);

/* somar(3,"4cinco"); */
echo "<br><hr>";

/* para retornar um valor int (inteiro) */

function soma09($aa,$bb):int{

    echo "Soma de $aa + $bb, é: ";
    
    return $aa + $bb;

}

echo soma09(15.7,2.8);
echo "<br><hr>";

/* Converte um tipo de valor */
/* function converte(int $ro, $rt) */

function converte(int $ro, int $rt){
 
    echo "$ro + $rt = ",$ro+$rt;
    
}

echo converte(10,10);