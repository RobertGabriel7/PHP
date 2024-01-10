<?php


Class ControleRemoto{

/* Atributos */
private $volume;
private $ligado;
private $tocando;

/* Special Method  */

public function __construct()
{
    $this->volume = 50;
    $this->ligado = false;
    $this->tocando = false;
}

/* Métodos */



/* Métodos Especiais: Getters and Setters */

private function getVolume(){
    return $this->volume;
}
private function setVolume($v){
    $this->volume = $v;
}

private function getLigado(){
    return $this->ligado;
} 

private function setLigado($L){
    $this->ligado = $L;
}

private function getTocando(){
    return $this->tocando;
}

private function setTocando($t){
    $this->tocando = $t;
}




}


?>