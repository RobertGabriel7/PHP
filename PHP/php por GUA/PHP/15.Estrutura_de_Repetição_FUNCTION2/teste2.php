<?php
/* 
function soma ($a,$b){

    $s = $a+$b;
    
    return($s);
    }
    
    $op = soma(3,4);
    
    echo $op;
 */

/* Incluindo uma função externa, assim é possivel criar uma function e utliza-la em outros projetos, sem a necessidade de criar uma mesma function para cada um dos projetos. E tambem serve para HTML.*/

/* include "o endereço do arquivo.php" */

echo 22;

include "functions1.php";

//ola();
echo"<br>";
//mostrarvalor();

echo "<br>require é semelhante ao include, porem se o arquivo não for encontrada o programa da erro, no include não";

echo "<br>Na verade, o include fala que não encontrou o arquivo e o código acima do include funciona, só não pode ser uma function que não existe.";
echo 17;
?>