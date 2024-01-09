<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Seven</title>
    <style>
        body{
            font-family: Arial;
            font-weight: 700;
            background-color: wheat;
        }
        legend{
            text-align: center;
        }          

        /* # significa ID e o . (ponto) significa Class */
        #tipo_da_conta{
            text-transform: uppercase;
        }
        input{
            border-radius: 5px;
            font-family: arial;
            font-weight: 700; 
            background-color: white ;
            border-color: black;            
        }
        fieldset{
            border-radius: 10px;
            border-color: black;
        }
    </style>
</head>
<body>

    <!-- A tag form serve para indicar que vai ser um formulario -->
    <form action="Banco_Seven.php" method="post">
    
    <!-- A tag fieldset criar uma borda (visualmente) para mostrar a area do formulario -->
    <fieldset>
    <!-- A tag legende serve para colocar uma legenda na borda do fieldset -->
    <legend>Banco Seven</legend>
    
    <label for="touppercase">Tipo da conta: CC ou CP ?</label> 
    <input type="conta" name="tipo_da_conta" id="tipo_da_conta" require maxlength="2">
    
    <input type="submit" value="Salvar">



    </fieldset>
    </form>


    <pre>
<!-- 
<!-- 

require_once "Banco_Seven.php";
/* 
$teste = new Banco7;



echo"<br>";
print_r($teste);
 */
 -->


    </pre>
</body>
</html>