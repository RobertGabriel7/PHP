
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
<style>
h4{
    
    text-align: center;
    color: blue;
    
}
div{

    text-align: center;
   
}
</style>
</head>
<body>

<div>
<?php

$a = $_POST["ini"];
$b = $_POST["fim"];
$d = $_POST["inc"];
$e = 0;

if($a < $b){

    while($a <= $b){
        
        echo $a,"             ";
        
        $a = $a + $d;
        
    
    }
}
else{

    while($a >= $b){

    echo " $a "," ";
        
        $a -= $d;
    }
}
?>
</div>

<h4><a href="exerciciohtml.html">Voltar</a></h4>

</body>
</html>