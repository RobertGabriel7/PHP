<?php
/* O valor da raiz só pode ser mudado se
receber algum valor e esse valor estiver 
no mesmo espaço da memoria.

Deve usar o & para mudar o valor da raiz.
*/

$raiz = "Valor padrão";

$galho2 = &$raiz;

$galho2 = 7;

echo "$raiz";

/* $valorGeral = " "; */