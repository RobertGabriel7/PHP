<?php
/* 
class carro {
    // atributo     
    public $carros = 'Lamborghini Huracan';
    public $valor = 'R$ 1.7000,00';

    public function mostrar(){
        
        echo "Carro: {$this->carros}";

    }
}

$op = new carro();
$op->mostrar();
*/

class data{
    public $dia = '01';
    public $mes = 'JAN';
    public $ano = '1970';

    public function mostrarData(){
        echo "{$this->dia} / {$this->mes} / {$this->ano}";
    }
}
$op = new data();
$op->mostrarData();

?>