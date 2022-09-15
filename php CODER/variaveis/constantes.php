<?php 
/* Constante é um dado que não sofre alteração */
define('TAXA_DE_JUROS', 2.7);

echo "taxa de juros: ", TAXA_DE_JUROS;

/* Outra forma de declarar uma constante */

const NOVA_TAXA_DE_JUROS = 5.5;
echo "<br> nova taxa: ", NOVA_TAXA_DE_JUROS;

/* Para usar o valor de uma variavel para uma constante */

/* Só pode usar o define, o const não dá. */

$valordataxa = 7.8;
define('TAXA_ALTA', $valordataxa);
echo "<br> taxa alta: ", TAXA_ALTA;

/* Outras constantes */

echo "<br>", __LINE__;

echo "<br>", __FILE__;

echo "<br>", __DIR__;