<?php

echo"opa<br><hr>";

class Carro{
    
    public $modelo;
    public $valor;

    function oCarro($oModelo,$oValor){
        $this->modelo = $oModelo; 
        $this->valor = $oValor;
        echo $oModelo,"<br>","R$ ",$oValor;
    }
    function oCarro1(){
        echo '<br>Camaro';
    }
}

$Meu_carro = new Carro;
$Meu_carro->oCarro($oModelo = 'Lamborghini Huracan',$oValor = '1.000.000,00');

$carro1 = new Carro;
$carro1 ->oCarro1();

echo "<br><hr>";

class aPessoa{

    public $nome = 'Robert Gabriel';
    public $idade = 19;

    function PessoaUM(){
        echo "Nome: {$this->nome} <br> Idade: {$this->idade} anos";
    }
}

$aPessoa = new aPessoa;
$aPessoa->PessoaUM();

?>