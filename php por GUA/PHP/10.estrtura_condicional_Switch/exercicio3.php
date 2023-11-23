<?php

$cid = $_POST["cidade"];

switch($cid){

    case 1:
    case 2:
    case 3:
    case 4: 
    case 5:
    case 6:
    case 7:
    
        echo "Você mora na região Norte";
        break;
    
    case 8:
    case 9:
    case 10:
    case 11:
    case 12:
    case 13:
    case 14: 
    case 15: 
    case 16:
    
        echo"Você mora na região Nodeste";
    
        break;
    
    case 17:
    case 18:
    case 19:
    echo"Você mora na região Centro Oeste";
    break;
    
    case 20:
    case 21:
    case 22:
    case 23:
    echo "Você mora na região Sudeste";
    break;
    
    case 24:
    case 25:
    case 26: 
    
        echo"Você mora na região Sul";
    break;
    
    default:
    echo"ops";
    
    } 



?>