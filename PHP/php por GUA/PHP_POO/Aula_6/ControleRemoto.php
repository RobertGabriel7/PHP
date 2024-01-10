<?php

/* Permite incluir outro código ao código atual */
include "Recursos/Interface7.php";

/* Class - Nome of the Class - implements serve para implementar a interface chamada de Controlador /// É necessario colocas os methods abstract dentro da Class */
Class ControleRemoto implements Controlador{



/* Atributos */
private $volume;
private $ligado;
private $tocando;

/* Implements */ 

/* estou implementando os methods que foram criados na interface para isso eu preciso sobrescrever os methods and only need to write public function e o method  */

public function Ligar()
{
    if($this->ligado == false){
        $this->setLigado(true);
        $this->setTocando(true);
    }else{
        echo "Tv is on";
    }
}

public function Desligar()
{
    if($this->ligado == true){
        $this->setLigado(false);
        $this->setTocando(false);
    }else{
        echo "Tv is off.";
    }
}

public function AbrirMenu()
{
    $this->getVolume();
    $this->getLigado();
    $this->getTocando();


}

public function FecharMenu()
{
    echo "fechando o menu...";
}

public function MaisVolume()
{
    if($this->volume < 100){ /* 97 */
        $this->volume =+ 5; /* 97 + 5 = 102 */
        $this->getVolume();
            
            if($this->volume >100 ){ 
                 $this->volume = 100; /* 100 */
                    $this->getVolume();
             }else{
                 echo "Volume da Tv: {$this->getVolume()}";
              }
    }else{
        echo "Volume maximo, (revisar)";
        $this->getVolume();
    }
}

public function MenosVolume()
{
    if($this->volume > 0 ){
        $this->setVolume($this->getVolume() - 5);
            if($this->volume < 0 ){
                $this->volume = 0;
                    $this->getVolume();
            }else{
              echo "Volume da Tv: {$this->getVolume()}";
            }
    }else{
        echo "Volume minino: {$this->getVolume()}";
    }
}

public function LigarMudo()
{
    if($this->volume >0 ){
        $this->volume = 0;
    }else{
        "Tv muda";
    }
}

public function DesligarMudo()
{
    if($this->volume == 0){
        $this->getVolume();
    }else{
        echo "Mudo desligado";
    }
}

public function Play()
{
    
}

public function Pause()
{
    
}

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
    return $volu = $this->volume * "-";
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