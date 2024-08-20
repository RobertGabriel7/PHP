<?php

class Aluno extends Pessoa1{
    
    private $matricula;
    private $curso;
    
    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($matri){
        $this->matricula = $matri;
    }

    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($curso1){
        $this->curso = $curso1;
    }

    public function cancelarMatricula(){
        echo "Matricula cancelada fi.";
    }

    public function apresentarAluno(){
        echo "\nMatricula: {$this->getMatricula()}\nCurso: {$this->getCurso()}";
    }

}

?>