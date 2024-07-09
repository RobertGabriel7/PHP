<?php

interface Publication {
    
    function abrir();
    function fechar();
    function folhear($p);
    function avacarPagina();
    function voltarPagina();

}


?>