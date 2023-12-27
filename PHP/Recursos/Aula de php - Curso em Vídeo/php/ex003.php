<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <style>

body {
    background: url(../_css/_imagens/fundo.jpg) ;
    background-position: 100%;
    background-size: 100%;
 /* background-attachment: fixed; */
    font-family: arial, sans-serif;
    
}

div {
    padding: 8px;
    position: relative;
    width: 1000px;
    height: 1000px;
    background-color: #f8f8f8;
    margin: 145px auto 200px auto;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: 3px 3px 0.3px rgba(0,0,0,.3);
    word-wrap: break-word;
}


    </style>
</head>
<body>
    
<?php

$celular = "Samsung S21 Ultra";

$valor1 = $_GET["valor"];

$valor1 -= $valor1*10/100;

echo "<p>Para quem comprar o $celular a vista, terá 10% de desconto.</p>";

echo"Valor do $celular com 10% de desconto: R$". number_format($valor1,2,',','.');

echo "<p> </p>";




?>

</body>
</html>