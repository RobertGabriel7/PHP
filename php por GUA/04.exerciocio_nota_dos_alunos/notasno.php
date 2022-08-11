<?php

$notaum = $_POST["nota1"];
$notadois = $_POST["nota2"];

$res = ($notaum + $notadois)/2;

if ($res < 5 )
{
    echo"Reprovado(a) com a nota $res";
}
elseif ($res >= 5 && $res <7)
{
    echo"Passou com a nota $res, mas quase reprovou. Você precisa melhorar!";
}
else
{
    echo"Parabéns, você passou de ano com a nota $res!";
}



?>
