<?php


#Classe é um modelo para criar objetos.

class Caneta{

#Atributos do moledo

    var $modelo;
    var $cor ;
    var $ponta;
    var $carga ;
    var $caneta;

#A function é um método ou operações que um objeto pode fazer.

function rabiscar (){

/*$this-> uma referência ao próprio objeto em que o código está sendo executado. É uma maneira de acessar propriedades (variáveis de instância) e métodos do objeto no qual o código está sendo executado.*/ 

if ($this->caneta == true){

echo 'Caneta tampada!';

}else{

    echo 'Rabiscando ...';

}

}

function tampada(){

    $this->caneta = true;

}

function destampada(){

    $this->caneta = false;

}









}
?>