<?php

class Funcionario extends Pessoa1{
    
    private $setor;
    private $trabalhando;

    public function getSetor(){
        return $this->setor;
    }
    public function setSetor($s){
        $this->setor = $s;
    }

    public function getTrabalhando(){
        return $this->trabalhando;
    } 
    public function setTrabalhando($tra){
        $this->trabalhando = $tra;
    } 

    public function mudarTrabalho(){
        echo "Mudou de trabalho";
    }
    public function apresentarFuncionario(){
        echo "\nSetor: {$this->getSetor()}\nTrabalhando: {$this->getTrabalhando()}";
    }
}

?>