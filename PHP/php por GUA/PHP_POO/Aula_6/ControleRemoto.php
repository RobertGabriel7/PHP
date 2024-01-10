<?php

/* Permite incluir outro código ao código atual */
include "Recursos/Interface7.php";

Class ControleRemoto implements Controlador{

/* Agora, estou implementando os methods que foram criados na interface para isso eu preciso sobrescrever os methods and only need to write public function e o method  */

public function Ligar()
{
    
}

public function Desligar()
{
    
}

public function AbrirMenu()
{
    
}

public function FecharMenu()
{
    
}

public function MaisVolume()
{
    
}

public function MenosVolume()
{
    
}

public function LigarMudo()
{
    
}

public function DesligarMudo()
{
    
}

public function Play()
{
    
}

public function Pause()
{
    
}

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
private function setVolume($V){
    $this->volume = $V;
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

private function setTocando($T){
    $this->tocando = $T;
}




}


?>