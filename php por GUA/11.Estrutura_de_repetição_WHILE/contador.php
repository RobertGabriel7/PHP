<?php

// Contador de 1 até 10
/*$a = 1;

while($a<=15){

    echo $a,"<br>";
    
    $a++;
}


*/
//Contador de 10 até 0
/*
$b = 10;

while ($b >= 1) {
    
    $b = $b - 1;
    
    echo $b,"<br>";
    
}

*/


?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    
<div>
    <form method="post" action="contadorhtml.html">
<?php

$a = 1;

while ($a <= 5){

echo "Valor $a: <input type='number' name='valor$a' >";

$a++;

echo"<br>","<br>";

}
?>
<input type="submit" value="Enviar">
</form>
</div>

</body>
</html>