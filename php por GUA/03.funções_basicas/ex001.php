<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <style>

body {
    background: url(../_css/_imagens/fundo.jpg) ;
    background-position: 100%;
    background-size: 100%;
 /* background-attachment: fixed; */
    font-family: arial, sans-serif;
    
}

div {
    padding: 8px;
    position: relative;
    width: 1000px;
    height: 1000px;
    background-color: #f8f8f8;
    margin: 145px auto 200px auto;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: 3px 3px 0.3px rgba(0,0,0,.3);
    word-wrap: break-word;
}


    </style>

</head>
<body>
<div>
    
    <?php
    
    //As Variáveis no php não é necessário declarar o tipo da Variável!
    
    //Variável de tipo : caractere/string - Texto.
    
    $nome = "Robert Gabriel </p>";
    
    //Variável de tipo : interiro/int/integer - Números inteiros.
    
    $idade = 19;
    
    //Variável de tipo : real/float/double - Números decimais ou fracionados.
    
    $altura = 1.75;
    
    //Variável de tipo : ???/bool - Verdadeiro (true) ou falso (false).
    
    $tem_iphone = false;
    
    //Para fazer declarações: echo

    $n1 = $_GET["x"];
    $n2 = $_GET["y"];
    
    //echo "<p>Valores recebidos: $n1 e $n2</p>";

    //echo "<h2>Operações básicas de matemática com base nesses dois valores: $n1 e $n2</h2>";

    //Sinal de soma: +
    echo "<p>Soma:</p>" . ($n1+$n2);

    //Sinal de Multpiclicação: *
    echo "<p>Multiplcação:</p>". ($n1*$n2);    

    //Sinal de Divisão: /
    echo "<p>Divisão:</p>" . ($n1/$n2);

    //Sinal de subtração: -
    echo "<p>Subtração</p>" . ($n1-$n2);

    //Sinal de Porcentagem: %  
    echo "<p>Porcentagem</p>" .  ($n1%$n2);
    //Operação de média:
    echo "<p>Média</p>". ($n1 + $n2) /2; 
    //Valor Absoluto:
    echo "<p>Valor Absoluto</p>". abs($n1);
    //
    echo "<p>Potenciação: $n1<sup>$n2</sup></p>". pow($n1, $n2);

    $raiz_aqua = 50;

    echo "<p>Raiz quadrada</p>". sqrt($raiz_aqua);

    $round_123 = 8.4;

    echo "<p>Valor arredondado de $round_123 é:</p>". round($round_123);
    
    $int_12 = 12.3;

    echo "<p>Valor Inteiro da variável: $int_12 </p>". intval($int_12);
    
    $round_123 = 8.4;

    echo "<p>Valor arredondado de $round_123 é:</p>". round($round_123);
    
    $int_12 = 12.3;

    echo "<p>Valor Inteiro da variável: $int_12 </p>". intval($int_12);

    $number_22 = 100000 ;

    echo "<p>Valor de $number_22 em moeda é:</p> R$". number_format($number_22,2, ",", ".");

    ?>

</div>

</body>
</html>


