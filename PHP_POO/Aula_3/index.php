<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 - PHP POO</title>
    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
        }       
        p{
            font-family: Arial;
        }
        h2{
            font-family: Arial;
        }
    </style>
    
</head>
<body>
<pre>    


<?php 
/*
require_once 'caneta.php'; /* Classe PHP vai ser carregada aqui, ou seja, os dados que estão no arquivo caneta.php vai ser carregado aqui neste arquivo*/


require_once "caneta.php";

$c1 = new Caneta;    

$c1 ->modelo = 'BIC CLASSIC';
$c1 ->cor = 'BLACK';

$c1 ->tampada();
$c1 ->rabiscar();


#print_r($c1);

  
?>


</pre>


</body>
</html>