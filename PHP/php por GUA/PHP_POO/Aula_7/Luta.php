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
        /* Array do indice 0 até ... o indice 5 */
        $lutadores = [0...5];

        $lutadores[0] = new Lutador("Popó","BRA",28,175.5,75.9,12,2,0);
        $lutadores[1] = new Lutador("João sem braço","BRA",31,1.78,80,5,2,20);
        $lutadores[2] = new Lutador("Aranha","BRA",27,1.80,80,11,5,4);
        $lutadores[3] = new Lutador("Luva de pedreiro","BRA",21,1.76,60,10,2,0);

        print_r($lutadores);
        echo "<hr>";
        print_r($lutadores[0]->apresentar());

/* 
        $fight[1] = new Lutador;

        $fight->setPeso(80.4);

        $fight->getCategoria();

        print_r($fight); */














        ?>
    </pre>
</body>
</html>