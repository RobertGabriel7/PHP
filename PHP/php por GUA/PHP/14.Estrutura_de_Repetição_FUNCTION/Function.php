<?php

//A função procedimento do PHP:

/*
function soma ($a,$b){

$r = $a + $b;
echo"<p>$r";

}

soma(3,4);
soma(70,7);
$x = 25;
$y = 25;
soma($x,$y)






function soma ($a,$b){

$s = $a+$b;

/* return ($s) quer dizer que a function vai retornar a variavel $s  
/* return($s); 
/
}

$op = soma(3,4);

echo $op;

*/

/* Essa Função//Procedimento NÃO vai retornar valor, vai ser apenas executada*/

function SomarAll ($aa, $bb){

    $resultado1 = $aa + $bb;
    echo $resultado1;
} 

/* Para chamar essa function */
//SomarAll(7,3);


/* Nesse caso, essa function vai retornar algum valor, e por isso ela precisa de uma variavel para receber esse valor */
function Somarall2 ($a11, $b11){

    $resultado2 = $a11 + $b11;
    
    /* a Function vai retornar valor por causa desse return  */
    return $resultado2;

}
$recebendoValorDaFunction = Somarall2(7,7);
//echo "<br> $recebendoValorDaFunction";




function Contando(){

    /* tive problema por não colocar um S no final de arg */

    /* Essa função "func_get_args"  vai pegar todos os argumentos que foram passada para a function e coloca-los em um vetor */
    
    $allArguments = func_get_args();
    
    /* Essa função vai contar a quantidade de arguments que foram passados para a function */
    $numeroDeArguments = func_num_args();
    $ss = 0;
    
    for ($s = 0; $s < $numeroDeArguments; $s ++){

        /* 0 = 0 + 12 */
        /* 12 = 12 + 12 */

        /* $ss = $ss + $allArguments[$s]; */
        
        $ss += $allArguments[$s];

        //$somaDosArguments = $somaDosArgs + $quantidadeDeArguments;

        
        
    }
    echo "Soma total dos valores: $ss";
    echo "<br>$numeroDeArguments";
    //echo "<br> $teste2";

}

Contando(12,12,12,12);










/* 

//Essa função pega todos os argumentos e coloca dentro de um vetor
function soma(...$r){

    //Vai passar o numero de argumentos que foram passados
    
    $g = func_num_args();
  
    $s =0;
  
    for ($d = 0; $d < $g ;$d++){
    
    $s += $r[$d];
    
    }
    return $s;
    }
    
    $a = soma(1,7,5,2,9,8,7);
    
    echo$a;
     */

?>