<?php


#Classe é um modelo para criar objetos.

class Caneta{

#Atributos do moledo

    /*Atributo publico: todos acessam*/
    public $modelo;
    public $cor ;

    /*Atributo privado: só eu acesso*/
    private $ponta;

    /*Atributo protegido: só minha mãe e meus filhos*/
    protected $carga ;
    protected $caneta;

#A function é um método ou operações que um objeto pode fazer.

public function rabiscar (){

/*$this-> uma referência ao próprio objeto em que o código está sendo executado. É uma maneira de acessar propriedades (variáveis de instância) e métodos do objeto no qual o código está sendo executado.*/ 

if ($this->caneta == true){

echo 'Caneta tampada!';

}else{

    echo 'Rabiscando ...';

}

}

/*Mesmo o atributo caneta estando protegido, é possível acessar atráves 
da function (método)*/

public function tampada(){

    $this->caneta = true;

}

private function destampada(){

    $this->caneta = false;

}









}
?>