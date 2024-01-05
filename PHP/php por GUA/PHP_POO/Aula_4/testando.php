<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    
    <?php
        require_once 'caneta.php';
    /* Classe  */
    $caneta11 = new Caneta();
    $caneta11->Caneta("Bic 7","Preto",0.7);


    /* Atributos */
    //$caneta11->setPonta(0.7);
    //$caneta11->setModelo("BIC CLASSIC 7");
    //$caneta11->setCor("Azul");
    
    /* Métodos */
    //$caneta11->tampada();

    print_r($caneta11);
    
    echo "Eu tenho uma caneta  {$caneta11->getModelo()} de ponta {$caneta11->getPonta()} da cor {$caneta11->getCor()}";

    ?>
</pre>

</body>
</html>


