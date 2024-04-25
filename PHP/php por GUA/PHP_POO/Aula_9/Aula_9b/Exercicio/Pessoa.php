<?php

// publico // Acesso permitido
// privado // Membros privados não são acessíveis fora da classe
// protegido // Membros protegidos não são acessíveis fora da classe

Class Pessoa{

    /* Atribudos */

    private $nome;
    private $idade;
    private $sexo;

    /* Metodo construtor */
    public function __construct($nome1, $idade1, $sexo1){
        $this->nome  = $nome1;
        $this->idade = $idade1;
        $this->sexo = $sexo1;
    }
    /* Métodos Getters e Setters: São métodos para acessar (get) atributos e modificá-los (set) */

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nomee){
        $this->nome = $nomee;
    }

    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($idadee){
        $this->idade = $idadee;
    }

    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($sexoo){
        $this->sexo = $sexoo;
    }

    /* Métodos de ações */

    public function fazerAniver(){
        $this->idade ++;
        echo "Parabéns $this->nome, hoje é o seu aniversário e você está completando ", $this->getIdade(), " anos de idade!!!<br>";
    }
}


?>