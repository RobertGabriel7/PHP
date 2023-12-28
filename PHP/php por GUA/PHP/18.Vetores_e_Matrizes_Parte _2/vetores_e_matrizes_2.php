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

/* Vai contar a quantidade de elementos do vetor */
echo "O meu vetor tem ".count($n)." elementos";

/* Vai adicionar o valor 77 no ultimo indice do vetor */
array_push($n,77);

/* Para eliminar o ultimo elemento do vetor. */
array_pop($n);
/* Para incluir no inicio do vetor */
array_unshift($n, 777);
/* Para elimiar o primeiro elemento */
array_shift($n);



$x = 4;

/* A variável $y é criada como uma referência para $x. Isso significa que $y e $x agora se referem ao mesmo espaço na memória. Qualquer alteração em $y também afetará $x e vice-versa. */

$y = &$x;

$z = ++ $y ;
 
/* Aqui, o operador de incremento pré-fixado (++$y) é aplicado a $y. Isso significa que $y é incrementado em 1 antes de ser atribuído a $z. Como $y é uma referência para $x, ambos são incrementados em 1. */
echo "<br>x = $x  y = $y  z = $z";
echo"<br>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>><br>";



for($i=0; $i<=10; $i++){
  if($i % 3 == 0)
          continue;
  echo $i."-";
}
echo "Fim <br>";

$a = 5;
$b = 3;
$c = ($a>$b)?true:false;

print $c;
echo "<br><<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< <br>";
$a=10;
$b=2;
$j=5;

for ($i = 0; $i < 5; $i++){
/* 
  echo "$i-";
   */
   
  if ($i % $b == 1) 

  echo "<br>$i"; 
}
$a = 10;
$b = "10";
if ($a == $b)
  print "caso 1";
else
  print "caso 2";

if ($a === $b) {
  print "caso 3";
} else {
  print "caso 4";
}
?>

</pre>

</body>
</html>