<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;500&family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./recursos/estilo.css">
    <link rel="stylesheet" href="./recursos/style.css">
    <title>EXERCICIO</title>
</head>
<body class="exercicio"> 
 <header class="cabe">
    <h1>Curso de PHP</h1>
    <h2>Visualização de Exercicios</h2>
 </header>
 <nav class="navega" >
   <a id="a1" href=<?= "{$_GET['dir']}/{$_GET['file']}.php"
   ?>
   >SEM FORMATAÇÃO</a>
   <a id="a2" href="./site.php" class="vermelho">Voltar</a>
 </nav>
 <main class="prin">
    <div class="conteudo">
<h1>
   <?php
   include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
   ?>
</h1>

    </div>
 </main>
 <footer class="rodape">
    DESENVOLVIDO POR ROBERT, COM COD3R. ©️ 
    <!-- Data de hoje -->
    <?php echo date('Y');?>
   
 </footer>
</body>
</html>


