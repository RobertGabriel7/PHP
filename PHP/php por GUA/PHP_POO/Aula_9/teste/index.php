<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa</title>
</head>
<body>
    <pre>
        
        <?php
        
        require_once "pessoa.php";
        require_once "livro.php";
    
        $novaPessoa[0] = new Pessoa("Robert", 21, "MASC");
        $novoLivro[0] = new Livro("PHP POO", "DJ KELI", 520, 0, true, $novaPessoa[0]);
        
        $novoLivro[0]->detalhes(); 
        print_r($novaPessoa[0]);
        print_r($novoLivro[0]);
    ?>

</pre>

</body>
</html>