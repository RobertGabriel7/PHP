<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condição de multipla escolha</title>
<style>
a{
color: red;
}

</style>
</head>
<body>
    
<?php

$a = $_POST["semana"];

switch($a){

case 2:
case 3:
case 4:
case 5:
case 6:    
echo"Vai trabaia";
break;

case 7:
case 8:
echo"Hoje é dia de descansar!";
break;
default:
echo"Errouuuuu";

}

?>
<br>
<a href="exercicio2html.html">Voltar</a>
</body>
</html>