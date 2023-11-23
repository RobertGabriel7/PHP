<?php

$nome = isset($_POST["nomE"])?$_POST["nomE"]:"[Não informado]";

$nasc = isset($_POST["adn"])?$_POST["adn"]:"Sem valor";

$sexo = isset($_POST["sexo"])?$_POST["sexo"]:"[Sem sexo]";

$idade = date("Y") - $nasc;

echo"$nome é $sexo e tem $idade anos de idade. <hr>";



?>