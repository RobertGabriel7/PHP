<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family: Arial;
        }
    </style>
    <title>Relembrart</title>
</head>
<body>
    
<p>
$teste  = (string ) "Ola "; /*ou:  integer */  <br>
$teste = (int) 77;  <br>
$teste = (double) 77.7; <br>
$teste = (float) 7.7; <br>
$teste = (boolean) true ;</p>

<p>Para valores da URL para uma variavel, precisa acrecentar: <br> ?a=5&b=7 <br> a variavel "a" recebe o valor <strong>5</strong> e a variavel "b" recebe o valor <strong>7</strong>.</p>
<p>Agora o código no php:</p>
<p> 
$n1 = $_GET["a"]; <br>
<p>Ou seja, o  GET vai pegar o valor que esta na URL e jogar o valor para a variavel $n1</p>
$n2 = $_GET["b"];
<p>Mesmo coisa que acontece no exemplo acima, acontece aqui. </p>
</p>
<p>Já o método $_POST["a"] vai pegar os valores de um formularia em html (por exemplo) e vai enviar para um arquivo em php</p>
<p>Exemplo:


<!-- O action precisa receber o endereço do arquivo php -->
<form method="post" action="processa_formulario.php">

<label for="campo_a">Campo A:</label>
   
<input type="text" name="a" id="campo_a">

<button type="submit">Enviar</button>

</form>

</p>


</body>
</html>