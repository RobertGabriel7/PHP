<?php

function anotarpedido($comida,$bebida = "Suco de Laranja natural"){
/* global $pedido; 
$pedido = */ 
echo "Comida: $comida"."<br> Bebida: $bebida";

}
/* Caso não tenha algum valor padrão, é obrigado a passar. */

echo anotarpedido("Filé com fritas");

