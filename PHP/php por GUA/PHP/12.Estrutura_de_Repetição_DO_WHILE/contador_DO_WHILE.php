<?php

/*

//Contagem de 1 até 10
$a=0;
$b=10;
$c=0;


do{

    echo$a," ";
    
    $a+=1;

}while($a<=$b) 

?>
*/

//Contagem de 10 até 1

/*

$a=10;
$b=0;
$c=0;


do{

    echo$a," ";
    
    $a-=1;

}while($a>=$b) 

?>
*/

$a=10;
$b=1;
//$c=0;
//$d=0;
$e = 1;
$d = 10;

do{

$e = $e * $a;

$a--;

}while($a>=$b); 

echo "<h3> $d ! = $e ";

?>


