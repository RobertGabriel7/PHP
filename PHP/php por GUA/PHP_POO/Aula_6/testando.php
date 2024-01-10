<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implements</title>
    <style>
        body{
            font-family: Arial; 
            font-weight: bold;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Controle Remoto</h2>
<p> 
    
        <?php
        require_once "ControleRemoto.php";
        $controle = new ControleRemoto;
    
       /*  $controle->Ligar(); */
        echo "<hr>"; 
        $controle->ligar();
        echo "<hr>";
        $controle->AbrirMenu();
        echo "<hr>";   
        $controle->MaisVolume();
        echo "<hr>";
        $controle->MaisVolume();
    
        
        
        
        
        ?>
    
</p>
</body>
</html>