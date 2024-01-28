<?php

require_once "../Aula_7/Lutador.php";

/* Relacionamento de agregração serve para agregar caracteristicas de uma class para outra */
/* Objetos são estancias de class. Eu preciso de uma clss para estanciar um objeto */

class Luta {

/* Atributos */

/* Vai ser uma instancia (objeto) da class lutador */
private $desafiado;
private $desafiante;
private $rounds;
private $lutaAprovada;

/* Method */


/* A class b TEM UM atributo da class a  */
public function marcarLuta($lutador1, $lutador2){
    if ($lutador1->getCategoria() == $lutador2->getCategoria() && $lutador1 != $lutador2) {
        echo "Luta marcada!";
        $this->lutaAprovada = true;
        $this->desafiado = $lutador1;
        $this->desafiante = $lutador2;
    }else{
        echo "Impossivel marcar a luta.";
        $this->lutaAprovada = false;
        $this->desafiado = null;
        $this->desafiante = null;
    }
}

public function lutar(){
    if($this->lutaAprovada){

/* O que está acontecendo aqui? */
/* Estou acessando as variaveis que estão privadas nesse escopo e por meio dessas variaveis, estou acessando o metodo apresentar() que está em outra Class. Essa Class está localizada em outro endereço dessa Class atual, por isso, coloquei um require_once. */

        $this->desafiado->apresentar();

/* Mesmo o VS Code não mostrando sugestões dos metodos que estão em outra Class, funciona, por incrivel que pareça.  */

        $this->desafiante->apresentar();
        $vencedor = rand(0,2);

        switch ($vencedor) {
            case 0:
                echo "<hr>Empatou!";
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();

                break;
            case 1;
                echo "<hr> {$this->desafiado->getNome()} ganhou!";
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
                $this->desafiado->status();
                $this->desafiante->status();     
                break;
            
            case 2;
            echo "<hr>{$this->desafiante->getNome()} ganhou!";
            $this->desafiado->perderLuta();
            $this->desafiante->ganharLuta();
            $this->desafiante->status();
            $this->desafiado->status();
                break;
            default:
                echo "deu erro";
                break;
        }

    }else{
        echo "<br>A luta não pode acontecer";
    }
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