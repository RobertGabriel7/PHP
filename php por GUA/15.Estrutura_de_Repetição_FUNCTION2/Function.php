<?php

//Função recebendo o parametro por valor

/*
function soma ($a,$b){

$s = $a+$b;

return($s);

}

$op = soma(3,4);

echo $op;

*/

//Função recebendo o parametro por referência

/*
function topo ($x){

$x += 2;

echo"<p>O valor de x é: ",$x;

}

$a = 5;
$r = topo($a);
echo "<p>O valor de a é: ",$a;
*/

include "teste1.php";

echo"<br>";

require "teste2.php";

//include"teste2.php";

//teste2();







?>