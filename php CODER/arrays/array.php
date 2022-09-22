<?php


$r1 = array("eita", "opa, blz?",0,"blz!" );

var_dump($r1);

echo "<br>";

print_r($r1);

echo"<hr>";

echo "array: ",$r1[2];

$nome = array('elisa' => 16, 'robert' => 19);

print_r($nome);
var_dump($nome);

echo"<hr>";

$mes = array(1 => "janeiro", "fevereiro","março","abril");

print_r($mes);

echo $mes[2];

echo"<hr>";

$dados = [
    "nome" => "Robert",
    "idade" => "19 anos",
];

$dados2 = [
    "naturalidade" => "Brasileiro",
];

$dadoscompletos = $dados + $dados2;

print_r($dadoscompletos);

/* Para saber se é um array ou não. Caso sim, mostrará o numero 1 */

echo "<br>",is_array($dadoscompletos);

/* Quantidade de dados no array */

echo "<br>",count($dadoscompletos);

/* 'Sort' serve para colocar os dados em ordem */

sort($dadoscompletos);







