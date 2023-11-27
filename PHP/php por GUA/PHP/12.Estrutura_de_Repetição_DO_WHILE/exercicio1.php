<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
h3,h4{
    text-align: center;
}

</style>
</head>
<body>
 <h3>O Resultado</h3>
 <hr>   

 <?php

$a=$_POST["tabuada"];
$b=1;
$c=10;

do{

echo "<h4>$a x $b = ",$a*$b;
echo"<br>";
++$b;

}while($b<=$c);


?>
<br>
<hr>
<a href="exercicio1html.html">Voltar</a>

</body>
</html>



