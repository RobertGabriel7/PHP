<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<pre>

<?php

$a = array(1,5,7,8,9,3);

$a[] = 7;

print_r($a);

echo"<br>";
echo"<hr>";
echo"<br>";
$c = range(5,20,5);

print_r($c);
echo"<br>";
echo"<hr>";
echo"<br>";

$cad = array("Nome"=>"Robert, o amor da Elisa",
"Idade"=>19,"Peso"=>95);

//print_r($cad);

foreach ($cad as $r => $e) {
    echo"O campo $r possui o conteudo: $e <br>";
}

echo"<br>";
echo"<hr>";

$n = array(array(2,3),
     array(3,4),
     array(9,5));

$n[2][0] = $n[1][1];

print_r($n);    




?>

</pre>
</body>
</html>
