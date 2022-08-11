<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
h1{
    text-align: center;
}

case{
    
    text-align: center;
    color: red;
}

</style>
</head>
<body>
<h1>Resultado</h1> 
<hr>
<?php

$op = $_POST["op"];
$num = $_POST["num"];

switch($op){

case 1:
     
    $r = $num * 2;   

    break;

case 2:
    $r = $num ^ 3 ;
    
    break;

    case 3:
    $r = sqrt($num); 
        break;
    default:
    $r = "erro";
}

echo "<h4> Você digitou o número $num, e escolheu a opção: $op </h4>";
echo "<h4>O resultado foi: $r</h4>";
?>

<a href="exercicio1html.html">Voltar</a>

</body>
</html>