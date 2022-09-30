<?php

function opa($valor1, $valor2, $opera, $funcao){
    $resultado = $funcao($valor1,$valor2)?? 'nada';
    echo $resultado;
}

$soma = function($valor1,$valor2){

    return $valor1 + $valor2;
    
};

opa(2,3,'+',$soma);