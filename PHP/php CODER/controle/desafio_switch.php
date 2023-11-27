<form action="desafio_switch.php" method="GET">
    <select name="ops" id="op">    
    <option value="km_metros" require >Km em Metros </option>
       
    </select>
    
    <p>Valor:</p> <label for="valor1"><input type="number" name="valor1" id="valor1" require minlength="0" maxlength="1000" value="0"></label>
    <br>
    <br>
    <button>Calcular</button>
</form>

<h3>Resultado:</h3>

<?php

const MULTI = 1000;

$valor = $_GET["valor1"] ?? 0;
$opcao = $_GET["ops"];


switch ($_GET["ops"]) {
  
    case 'km_metros': 
       
        echo "$valor Km em Metros: ",number_format(MULTI*$valor,2,",",".");
 
        break;
    
    default:
        echo "Nenhum valor definido.";
        break;
}

?>