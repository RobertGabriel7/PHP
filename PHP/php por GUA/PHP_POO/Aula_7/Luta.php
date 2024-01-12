<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fight</title>
</head>
<body>
    <pre>
        <?php

        include "../Aula_7/Lutador.php";
        
        $fight = new Lutador;

        $fight->setPeso(80.4);

        $fight->getCategoria();

        print_r($fight);














        ?>
    </pre>
</body>
</html>