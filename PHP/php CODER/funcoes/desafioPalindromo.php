<form action="desafioPalindromo.php" method="post">

<h1>É um nome Polindromo ? </h1>
<br>
<label for="tex">Digite um nome: </label><input type="text" name="texto" id="tex" value="">

<p><input type="submit" value="Enviar"></p>

<hr>

<h3>Resposta:</h3>

</form>

<?php
if($_POST["texto"] <> null){
$nome = $_POST["texto"]??"opa";

/* echo strlen($nome); */
$num= strlen($nome);

for ($i=0; $i < $num; $i++) { 
    
    if($nome === strrev($nome)){
        echo "Y_E_S, é polindromo!";  
        break;
    }else{
        echo "Ops... não é polindromo.";
        break;
    }

}
}


?>
