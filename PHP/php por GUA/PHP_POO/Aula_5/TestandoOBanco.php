<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Seven</title>
</head>
<body>



<label for="">Qual o tipo da Conta: Conta Corrente (CC) ou Conta Poupança (CP) ?</label>
<input type="TipoDaConta"/ > 



    <pre>

<?php

require_once "Banco_Seven.php";

$teste = new Banco7;

echo"<br>";
print_r($teste);


?>


    </pre>
</body>
</html>