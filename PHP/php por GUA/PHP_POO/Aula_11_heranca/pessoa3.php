<?php

/* Class abstrata */

abstract class Pessoa3 {

    private $nome;
    private $idade;
    private $sexo; 

    /* Getters e Setters */

    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($no){
        $this->nome = $no;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($ida){
        $this->idade = $ida;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sex){
        $this->sexo = $sex;
    }

    /* Metodo final */

    public function fazerAniversario(){
        echo "Parabens, gloria a Deus pela a sua vida.";
    }

}


/* Class poor */
/* Henrça de implementação */
class visitante extends Pessoa3{

}

class Aluno12 extends Pessoa3{
    
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
    public function setCurso($curs){
        $this->curso = $curs;

    }
    public function pagarMensalidade(){
        echo "Mensalidade paga.";
    }

}

class Bolsista extends Aluno12{
    
    private $bolsa;

    public function getBolsa(){
        return $this->bolsa;
    }
    public function setBolsa($bol){
        $this->bolsa = $bol;
    }
    
    public function renovarBolsar(){
        echo "Bolsa renovada";
    }
    
    /* Sobrepor */
    public function pagarMensalidade(){
        echo "Mensalidade paga.";
    }
}









?>
