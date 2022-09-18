

<h1>Operador Logico</h1>
<hr>
<p>Caso as duas opções for escolhidas, terás uma TV de 50 polegatas, se tiver apenas uma opção selecionada terás uma TV de 45 polegtas. Contratio das dus opções, não terás. </p>

<form method="GET" action="desafio_operador_logico.php">
    <h3>Opções:</h3>
    <label for="t1">Trabalho 1</label><input type="checkbox" name="tra1" id="t1" >
    <br>
    <label for="t2">Trabalho 2</label><input type="checkbox" name="tra2" id="t2" >
    <br>
    <br>
    <input type="submit" value="Enviar">
</form>-

<?php

$resultado1 =  $_GET["tra1"] ;
$resultado2 =  $_GET["tra2"] ;


if ($resultado1 == "on" && $resultado2 == "on") {
   
    echo "Opa, terás uma TV de 50 polegadas!!";
    
}else
    if ($resultado1 ==="on" or $resultado2 ==="on") {
        
        echo "Opa, terás uma TV de 45 polegadas.";
    }
?>