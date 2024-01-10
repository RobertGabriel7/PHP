<?php

/* Permite incluir outro código ao código atual */
include "Recursos/Interface7.php";

/* Class - Nome of the Class - implements serve para implementar a interface chamada de Controlador /// É necessario colocas os methods abstract dentro da Class */
Class ControleRemoto implements Controlador{


/* Atributos */
private $volume;
private $ligado;
private $tocando;

/* Special Method  */

public function __construct()
{
    $this->volume = 95;
    $this->ligado = false;
    $this->tocando = false;
}

/* Implements */ 

/* Métodos */

/* estou implementando os methods que foram criados na interface para isso eu preciso sobrescrever os methods and only need to write public function e o method  */

public function Ligar()
{
    if($this->ligado == false){
        $this->setLigado(true);
        $this->setTocando(false);
        /* Operador ternario if: ($this->getTocando()?"Sim":"Não") */
        echo "Tv está ligada: ",($this->getLigado()?"Sim":"Não")," <br>Está tocando: ",($this->getTocando()?"Sim":"Não"),"<br>Volume: {$this->getVolume()}";
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
    echo "Tv está ligada: ",($this->getLigado()?"Sim":"Não")," <br>Está tocando: ",($this->getTocando()?"Sim":"Não"),"<br>Volume: {$this->getVolume()} ";
    echo"[0 ";
    for ($i=0; $i < $this->getVolume(); $i++) { 
        echo"|";
    }
    echo" {$this->getVolume()}]";
}

public function FecharMenu()
{
    echo "fechando o menu...";
}

public function MaisVolume()
{
    if($this->ligado){
        if($this->volume < 100){ /* 97 */
            $this->volume += 5; /* 97 + 5 = 102 */
                $this->getVolume();
            
                     if($this->volume >=100 ){ 
                        $this->volume = 100; /* 100 */
                            $this->getVolume();
                            echo "Volume maximo";
                            echo" [0 ";
    for ($i=0; $i < $this->getVolume(); $i++) { 
        echo"|";
    }
    echo" {$this->getVolume()}]";
                         }else{
                                echo "Volume da Tv: {$this->getVolume()}";
                              
                            }
        }else{
            echo "Volume maximo ";
            echo"[0 ";
    for ($i=0; $i < $this->getVolume(); $i++) { 
        echo"|";
    }
    echo" {$this->getVolume()}]";
                $this->getVolume();
         }
    }else{
        echo "Tv is off.";
     }
}

public function MenosVolume()
{
    if($this->ligado){
        if($this->volume > 0 ){ /* 0 */
            $this->setVolume($this->getVolume() - 5); /* 0 - 5 = -5 */
                 if($this->volume <= 0 ){ /* Se for menor que 0 */
                    $this->volume = 0; /* vai receber 0 */
                         $this->getVolume();
                            echo "Volume minino: {$this->getVolume()}";
                    }else{
                        echo "Volume da Tv <br>{$this->getVolume()}[";
                        for ($i=0; $i < $this->volume; $i++) { 
                            echo "/";}

                        echo "]<br>";
                        }
                        
        }else{
        echo "Volume minino: {$this->getVolume()}";
         }
    }else{
    echo "Tv is off.";
}
}
public function LigarMudo()
{
    if($this->volume >0 ){
        $this->volume = 0;
    }else{
       echo "Tv muda";
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
    if($this->ligado){
        if($this->tocando){
            echo "Já está no Play.";
            }else{
                echo "Indo para o Play...";
                $this->setTocando(true);
                }
    }else{
        echo "Tv is off.";
    }
}

public function Pause()
{
    if($this->ligado){ /* Verifica se está ligada a tv */ /* Se estiver ligada, vai prosseguir o código abaixo, se não, vai ficar que a tv esta off */
        if($this->tocando){ /* Verifica se está tocando */ /* Se estiver tocando, a variavel tocando vai receber o valor false, para parar de tocar. Se não estiver tocando, quer dizer que a tv já está no Pause. */
            echo "Pause no Play.";
            $this->setTocando(false);
        }else{
            echo "Tv is Pause.";
        }
    }else{
        echo "Tv is off";
    }
}

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