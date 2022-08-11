<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
<style>
    h3{
        text-align: center;
    }
    div{
        text-align: center;
    }
</style>
</head>

<h3>Formulario</h3>
<hr>
<body>
    <div>
        <form method="post" action="35.php">
            <br>
            Nome:<input type="text" name="nome">
            <p></p>
            E-mail:<input type="text" name="email" >
            <p></p>
            <br>
            <hr>
            <input type="submit">
        </form>
    </div>
</body>
</html>


<?php

$nome = $_POST['nome'];
$email = $_POST['email']; 


//echo $nome,$email;

if ($nome <> "" && $email <> ""){

echo "$nome, os seus dados foram recebidos!";
}
else{

    echo"Erro ao enviar";

}

if ($idade = filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT)){

    echo $idade;

}

?>