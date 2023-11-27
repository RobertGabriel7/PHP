<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 - PHP POO</title>
    <style>
       
        p{
            font-family: Arial;
        }
        h2{
            font-family: Arial;
        }
    </style>
    
</head>
<body>
    


<?php 
/*
require_once 'caneta.php'; /* Classe PHP vai ser carregada aqui, ou seja, os dados que estão no arquivo caneta.php vai ser carregado aqui neste arquivo*/


require_once "caneta.php";

$c = new Caneta;    
$c -> cor = "azul";
$c -> modelo = "Faber Castel";
$c -> ponta = "0.7";
$c -> carga = "100";
$c -> tampada = true;

print_r($c);

$b = 42;

/*a tag var_dump() mostra o tipo da variavel e o seu valor*/
var_dump($b);
  
?>


<br><br>
<hr>

<h2>Anotações</h2>

<p>- Abstração é os atributos mais importantes. Um "objeto abstrato" refere-se a algo que não tem uma existência física tangível, mas existe de maneira conceitual ou mental</p>

<p>- print_r e var_dump, mostra a condição da variável</p>

</body>
</html>