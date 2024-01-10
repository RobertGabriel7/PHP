<?php

/* Ao inves de começar with Class, começa with Interface -Name of interface-{} */
interface Controlador {

/* Primeira coisa é definir os métodos abstratos */

/* Explicação: abstract significa que o método não vai ser desenvolvido aqui dentro desse método (ou function), mas em outro lugar /// public significa que o method vai ser public /// method is method /// and Ligar() is name of the method */ /* CORRIGINDO: não é necessario colocar abstruct antes do public function method. O propria interface entende que é um abstruct method  */
public function Ligar();

public function Desligar();

public function AbrirMenu();

public function FecharMenu();

public function MaisVolume();

public function MenosVolume();

public function LigarMudo ();

public function DesligarMudo();

public function Play();

public function Pause();

/* Na interface, só precisa das ações do method and not how do it. */


}

?>