<?php

//A função procedimento do PHP:

/*
function soma ($a,$b){

$r = $a + $b;
echo"<p>$r";

}

soma(3,4);
soma(70,7);
$x = 25;
$y = 25;
soma($x,$y)

*/

/*
function soma ($a,$b){

$s = $a+$b;

return($s);

}

$op = soma(3,4);

echo $op;

*/

//Essa função pega todos os argumentos e coloca dentro de um vetor

function soma(...$r){

//Vai passar o numero de argumentos que foram passados

$g = func_num_args();
$s =0;
for ($d = 0; $d < $g ;$d++){

$s += $r[$d];

}
return $s;
}

$a = soma(1,7,5,2,9,8,7);

echo$a;


?>