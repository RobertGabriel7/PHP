<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>

<body>
    <i>
        <strong>
        <pre>

            <?php

            require_once "pessoa1.php";
            require_once "aluno.php";
            require_once "professor.php";
            require_once "funcionario.php";

            $p1 = new Funcionario();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Pessoa1();

            $p1->SetNome('Ronaldinho');
            $p1->setIdade(30);
            $p1->setSexo('MASC');
            $p1->setSetor('Futebol');
            $p1->setTrabalhando(true);
            $p1->apresentacao();
            $p1->apresentarFuncionario();
            $p1->fazerAniversario();

            echo "\n\n";
            print_r($p4);

            echo "\n\n";
            print_r($p2);

            echo "\n\n";
            print_r($p3);

            echo "\n\n";
            print_r($p1);

            ?>


        </pre>
        </strong>
    </i>
</body>

</html>