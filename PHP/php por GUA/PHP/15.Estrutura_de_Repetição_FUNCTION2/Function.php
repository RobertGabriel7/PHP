<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            color: white;
            background-color: black;
            font-family: Arial;
            font-style: normal;
            text-align: center;
        }
    </style>
</head>
<body>

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

/* Quando passa a variavel como parametro e não o valor dela, o valor da variavel é alterada. Para fazer isso é só colocar & antes da varivael dos parametros  */

echo "Passando o variavel como parametro:";

function topo (&$x){

$x += 2;

echo"<p>O valor de x  é: ",$x;

}

$a = 5;
$r = topo($a);
/* Agora o valor da variavel $a muda porque ela foi passada como parametro para a function */
echo "<p>O valor de a é: ",$a;

/* >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */

echo "<br><br>Passando o valor da variavel como parametro:";

function topo1 ($x1){

    $x1 += 2;
    
    echo"<p>O valor de x é: ",$x1;
    
    }
    /* O valor da variavel $a1 não muda porque foi passado apenas o valor para a function, e não a variavel. */
    $a1 = 5;
    $r1 = topo1($a1);
    echo "<p>O valor de a é: ",$a1;
    


/* 
include "teste1.php";

echo"<br>";

require "teste2.php";
 */
//include"teste2.php";

//teste2();

?>



</body>
</html>

