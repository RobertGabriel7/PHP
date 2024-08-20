<?php

class Pessoa1 {
    
    /* Atributos */
    private $nome;
    private $idade;
    private $sexo;

    /* Getters and Setters */

    public function getNome(){
        return $this->nome;
    }
    public function SetNome($n){
        $this->nome = $n;
    }

    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($id){
        $this->idade = $id;
    }

    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($se){
        $this->sexo = $se;
    }

    /* Metodos */
    public function fazerAniversario(){
        echo "\n\nParabens ", $this->getNome(), ", hoje voce esta completando ", $this->getIdade(), " anos de idade.";
    }

    public function apresentacao(){
        echo "\n\nNome: {$this->getNome()}\nIdade: {$this->getIdade()}\nSexo: {$this->getSexo()}";
    }
}

?>