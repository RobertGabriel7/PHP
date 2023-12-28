<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento teste</title>
</head>
<body>

<pre>

<?php


require_once 'exercicio2.php';

$c = new Caneta ();

print_r($c);

/* Eu posso expecificar o tipo da varivael */

 
$teste  = (string ) "Ola "; /*ou:  integer */ 
$teste = (int) 77;
$teste = (double) 77.7;
$teste = (float) 7.7;
$teste = (boolean) true ;
 
echo $testando;


?>

<pre/>

</body>
</html>