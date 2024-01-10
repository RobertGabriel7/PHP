<?php

/* Ao inves de começar with Class, começa with Interface -Name of interface-{} */
interface Controlador {

/* Primeira coisa é definir os métodos abstratos */

/* Explicação: abstract significa que o método não vai ser desenvolvido aqui dentro desse método (ou function), mas em outro lugar /// public significa que o method vai ser public /// method is method /// and Ligar() is name of the method */
abstract public function Ligar();

abstract public function Desligar();

abstract public function AbrirMenu();

abstract public function FecharMenu();

abstract public function MaisVolume();

abstract public function MenosVolume();

abstract public function LigarMudo ();

abstract public function DesligarMudo();

abstract public function Play();

abstract public function Pause();

/* Na interface, só precisa das ações do method and not how do it. */


}

?>