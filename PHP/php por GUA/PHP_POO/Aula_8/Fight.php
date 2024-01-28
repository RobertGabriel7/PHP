<?php

require_once "../Aula_7/Lutador.php";

/* Relacionamento de agregração serve para agregar caracteristicas de uma class para outra */
/* Objetos são estancias de class. Eu preciso de uma clss para estanciar um objeto */

class Luta {

/* Atributos */

/* Vai ser uma instancia (objeto) da class lutador */
private $desafiado = Lutador;
private $desafiante = Lutador;
private $rounds;
private $lutaAprovada;

/* Method */


/* A class b TEM UM atributo da class a  */
public function marcarLuta($lutador1, $lutador2){
    if () {


    }else{
        echo "Impossivel marcar a luta.";
    }
}

public function lutar(){
    
}

/* Metodos Especiais */

public function getDesafiado(){
    return $this->desafiado;
}

public function setDesafiado($d){
    $this->desafiado = $d;
}

public function getDesafiante(){
    return $this->desafiante;
}

public function setDesafiante($d1){
    $this->desafiante = $d1;
}

public function getRounds(){
    return $this->rounds;
}

public function setRounds($r){
    $this->rounds = $r;
}

public function getLutaAprovada(){
    return $this->lutaAprovada;
}

public function setLutaAprovada($L){
    $this->lutaAprovada = $L;
}






}

?>