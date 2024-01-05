
<?php


class Caneta {

    private $modelo;
    private $ponta;
    private $cor;
    private $tampada;

//modelo    
public function getModelo(){
    return $this-> modelo;
}
public function setModelo($m) {
    $this-> modelo = $m;
}

//cor
/* aqui vai enviar o valor para a variavel $c e a variavel cor vai receber o valor da variavel $c */
public function setCor($c){
    $this-> cor = $c;
}

/* Aqui vai retornar o valor da variavel cor */
public function getCor(){
    return $this->cor;
}

//ponta
public function getPonta(){
    return $this->ponta;
}
public function setPonta($p){
    $this-> ponta = $p;

}

public function tampada(){
    $this->tampada = true;

}

//         Método Construtor (Construct)


//O metodo construct cria um objeto com atributos pré definidos
//E para criar esse metodo, pode colocar __construct ou o nome do obejto
//Por exemplo: "Caneta"
/* 
public function __construct()
{
    $this->ponta = 0.5;
    $this->cor = "Black";
}
 */
/*



public function Caneta1()

{

    $this->modelo = 'Classic Bic';
    $this->ponta = 0.7;
    $this->cor = 'Black Premium';
    $this->tampada();
}
*/
/*
public function Caneta()

{

    $this->modelo = 'Classic Bic';
    $this->ponta = 0.7;
    $this->cor = 'Black';
  
}
*/

public function Caneta ($m,$c,$p){

$this->modelo = $m;
$this->cor = $c;
$this->ponta = $p;
$this->tampada();

}
















}










?>

