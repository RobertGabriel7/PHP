<?php


function soma($a){
    return function($b) use ($a){
        return $a + $b;
    };
}

echo soma(5)(5);

echo "<br><hr>";

$opa = soma(3);

echo '<br>', $opa(4);
echo '<br>', $opa(7);