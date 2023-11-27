<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de incremento</title>
</head>
<body>
    <div>
<?php

/*Operadores de incremento*/
/*
$aa = $_GET["aa"];

echo"<p>Ano atual: $aa</p>";

echo"Ano passado: ".--$aa;
*/

/*Variaveiss referenciais*/
/*
$a = 2;
$b = $a;
$b += 5;

echo"<p>$b</p>";

$vr = 3;

$va = &$vr;

$va += 5;

echo"<p>$va</p>";

echo"$vr";
*/

/*Variavel de variavel*/

$var = 1234;

$$var = 567;

echo '<p>O valor da variável $var é: '. $var;
echo "<br></br>";
echo 'O valor da variável $$var é: '. $$var;
echo "<br></br>";
echo "Declarando as duas variáveis: " .$var. $$var;
?>


</div>
</body>
</html>