<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7</title>
</head>
<body>
    <?php
echo"<h2>Operadores relacionais</h2>";

$n1 = $_GET["n1"];
$n2 = $_GET ["n2"];
$tipo = $_GET["tipo"];

echo "<p>Os valores recebidos são: $n1 e $n2.</p>";

$resultado = ($tipo == "s") ? $n1+$n2 : $n1*$n2 ;    
    
    echo "O resultado será: $resultado.";
    echo"<hr></hr>";
    
$t1 = "3";

$t2 = 3;

$r = ($t1 === $t2)? "SIM": "NÃO" ;

echo"<h2>Operador unário</h2>";

echo 'As variáveis $t1 e $t2 tem o mesmo resultado ? '. $r;
echo"<hr></hr>";
echo "<p></p>";    
$nota1 = 7;
    
$nota2 = 9;

$nota3 = 9;

$nota4 = 3;
    
$re = ($nota1+$nota2+$nota3+$nota4)/4;

echo "A média do aluno foi $re, e a situação é: " . (($re >= 6)?"APROVADO":"REPROVADO");

echo"<hr></hr>";


echo"<h2>Operador lógico</h2>";

$ano = 2004;

$idade = 2022-$ano;

$si = ($idade>=18 && $idade<64)? "OBRIGATÓRIO":"NÃO OBRIGATÓRIO";

echo "Quem nasceu no ano de $ano, tem a idade de $idade anos. Essa pessoa precisa votar ? ". $si;



    ?>
</body>
</html>