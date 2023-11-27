<?php

class pessoa{
    public $nome;
    public $idade;

    function __construct($Nome,$Idade){
        echo 'Construtor chamado.';
        $this->nome = $Nome;
        $this->idade = $Idade;
    }


    function __destruct()
    {
        echo 'sem construtor';
    }

    function echo(){
        echo '{$this->nome},'
    }
}

$pessoa1 = new pessoa();
$pessoa1->echo();

