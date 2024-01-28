<?php

/* Está acontecendo isso, por meio de um arquivo eu consigo acessar outros arquivos que possuem Class */
/* index.php -> Fight.php -> Lutador.php */

require_once "Fight.php";


$lutadores = [0...5];

$lutadores[0] = new Lutador("Popó","BRA",28,175.5,75.9,12,2,0);
$lutadores[1] = new Lutador("João sem braço","BRA",31,1.78,80,5,2,20);
$lutadores[2] = new Lutador("Aranha","BRA",27,1.80,80,11,5,4);
$lutadores[3] = new Lutador("Luva de pedreiro","BRA",21,1.76,60,10,2,0);

$lutas = new Luta;

$lutas->marcarLuta($lutadores[0],$lutadores[1]);

echo "<hr>Teste para lutarem.";

$lutas->lutar();
     
?>