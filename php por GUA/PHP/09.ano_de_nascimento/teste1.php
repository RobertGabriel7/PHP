<?php

$anonas = $_POST["anoo"];

$idadeatual = 2022 - $anonas;

echo "Você nasceu em ",$anonas,", tem ",$idadeatual," anos de idade";

if ($idadeatual < 16 ) 
{
    echo ", e por lei, você não pode votar!";
}
elseif ($idadeatual >= 16 && $idadeatual<18)
{
    echo ", e por lei, você escolhe se quer votar ou não.";
}
elseif($idadeatual <= 65)
{
    echo", e por lei, você precisa votar!";
}
else
{
    echo ", e por lei, você escolhe se quer votar ou não.";
}



?>