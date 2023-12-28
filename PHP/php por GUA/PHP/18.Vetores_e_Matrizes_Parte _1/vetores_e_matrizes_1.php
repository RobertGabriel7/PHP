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

/* Adicionando valor no vetor */

$a[] = 7;

print_r($a);

echo"<br>";
echo"<hr>";
echo"<br>";

/*range(de onde começa a contar (5), vai contar até (20)), e vai pular de (5) até chegar no valor final que é (20)  */
 
$c = range(5,20,5);

print_r($c);

echo"<br>";
echo"<hr>";
echo"<br>";


/* indice personalizado  */

$v8 = array(1=> "a", 3=>"b", 7 => "c");

$v8[]= "e";


/* Vetor com chaves assosiativas
 */
$cad = array("Nome"=>"Robert, o amor da Elisa",
"Idade"=>19,"Peso"=>95);

print_r($cad);
 
foreach ($cad as $r => $e) {
    echo"O campo $r possui o conteudo: $e <br>";
}

echo"<br>";
echo"<hr>";

/* Matriz é um vetor dentro de outro vetor, ou seja, duas dimensóes */


$n = array(
     array(2,3),
     array(3,4),
     array(9,5));

/* 

array( *indice vertical *   array( *indice horizontal*)) 

0  |  2  | 3
    |      |
1  |  3  | 4
    |      |
2  |  9  | 5
    
       0     1  (coluna)

*/

/* $n esta selecionado a linha 2 e a coluna 0  */

/* Nesse caso abaixo, a linha 2 e a coluna 0 esta recebendo o valor da linha 1 / coluna 1 que é 4. Entao o valor da linha 2 / coluna 0 deixa de ser 0 e passa a ser 4. */

$n[2][0] = $n[1][1];

print_r($n);    
  
echo ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> <br>";

$n1 = $n;

print_r($n1[2][0]);

/* unset($cad[9]) vai apagar o indice 9 do vetor */

?>

</pre>
</body>
</html>
