<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e matrizes 2</title>
</head>
<body>
  
<pre>
  <?php

//$n = array("X","T","A","B","D","C","R","E");

//print_r($n);

echo"<br><hr><br>";

//var_dump($n);

//$r = array("8","7","3","1","2","B","A");

//array_push($r,"12345");
//array_pop($r);

//array_unshift($r,"123");
//sort($r);

$n[0] = 7;
$n[7] = 5;
$n[10] = 8;
$n[5] = 1;

krsort($n);

print_r($n);

?>

</pre>

</body>
</html>