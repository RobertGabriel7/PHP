<?php

class Professor extends Pessoa1{

    private $especialidade;
    private $salario;


    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function setEspecialidade($esp){
        $this->especialidade = $esp;
    }

    public function getSalario(){
        return $this->salario;
    }
    public function setSalario($sala){
        $this->salario = $sala;
    }

    public function receberAumento(){
        echo "Recebeu aumento";
    }
    public function apresentarProfessor(){
        echo "\nEspecialidade: {$this->getEspecialidade()}\nSalario: {$this->getSalario()}";
    }
}

?>