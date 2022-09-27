<?php

function opa(){

    echo "DEUS É MUITO BOM!!!!";
    /* rt é uma variavel global */
    $rt = "SEMPRE";
    echo "$rt"; 
}

echo opa();

echo "<br><hr>";



$variavel=3;

function r(){
    /* é variavel global */
    global $variavel;    
    $opa = 4;    
    $eita =  $opa + $variavel;
    echo $eita;
}

echo r();