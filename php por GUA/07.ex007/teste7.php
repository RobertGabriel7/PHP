<?php

$texto = isset($_POST["texto1"])?$_POST["texto1"]:"Texto Normal";
$tamanho = isset($_POST["tamanho1"])?$_POST["tamanho1"]:"20pt" ;
$cor = isset($_POST["cor1"])?$_POST["cor1"]:"#000001";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>

span.texto{

font-size: <?php echo $tamanho;?>;
color: <?php echo $cor;?>;
}

</style>
</head>
<body>
<div>
    
    <?php
    
    echo "<span class='texto'>$texto</span>";
    
    ?>
</div>

</body>
</html>

