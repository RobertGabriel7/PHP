<form action="operadorTernario.php" method="get">
<br>
Idade: <label for="idad"> <input type="number" name="idad" id="idad"></label>

</form>


<?php

$idade = $_GET["idad"];

echo $idade,"<br><br>";

if ($idade >= 18) {
    
    $status = "É maior de idade.";
}else{
    $status = "É menor de idade.";
}

echo $status;

$status2 = $idade >= 18 ? "É maior de idade.":"É menor de idade.";

echo "<br><br>",$status2;