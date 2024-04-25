<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio da aula 9b</title>
</head>

<body>
    <pre>
    <?php

    require_once 'Pessoa.php';
    require_once 'Livro.php';

    /* Estou instaciando uma class e salvando a class em um array */
    $genteNova[0] = new Pessoa("Robert Gabriel", 21, "masc");
    $genteNova[1] = new Pessoa('Biel', 21, 'masc');
    $genteNova[2] = new Pessoa('Robertin', 21, 'masc');

    
    $ebooks[0] = new Livro('Javascript', 'Robertin', 450, $genteNova[0]);
    $ebooks[1] = new Livro('Python', 'Joao', 230, $genteNova[1]);
    $ebooks[2] = new Livro('PHP', 'Hepls', 277, $genteNova[2]);
    /* 
    $ebooks->detalhesDoLivro();
    $ebooks->fechar();
    $ebooks->abrir(45); */
    /*  $ebooks->folhear(); */

    $ebooks[0]->detalhesDoLivro();
    echo "<br>";
    $ebooks[1]->detalhesDoLivro();
    echo "<br>";
    $ebooks[2]->detalhesDoLivro();

  

    ?>
    </pre>
</body>

</html>