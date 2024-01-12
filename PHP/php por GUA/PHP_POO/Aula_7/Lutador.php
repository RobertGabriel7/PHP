<?php 


Class Lutador{

/* Atributos */
/* Primeiro pilar da POO: Encapsulamento que é não deixar que ninguem mexa nos atributos */
private $nome;
private $nacionalidade;
private $idade;
private $altura;
private $peso;
private $categoria;
private $vitorias;
private $derrotas;
private $empates;



/* Special Method (function) */



public function __construct(){

}



/* Methods */



public function apresentar(){
    echo "Com vocês.... <br>";
    echo " {$this->getNome()}<br>";
    echo "Nacionalidade: {$this->getNacionalidade()}<br>";
    echo "Idade: {$this->getIdade()}<br>";
    echo "Altura: {$this->getAltura()}<br>";
    echo "Peso: {$this->getPeso()}<br>";
    echo "Categoria: {$this->getCategoria()}<br>";
    echo "Vitorias: {$this->getVitorias()}<br>";
    echo "Derrotas: {$this->getDerrotas()}<br>";
    echo "Empates: {$this->getEmpates()}<br>";
    


}

public function status(){

}

public function ganharLutar(){

}

public function perderLuta(){

}

public function empatarLuta(){

}



/* GETTERS and SETTERS */



public function getNome(){
    return $this->nome;
}
public function setNome($n){
    $this->nome = $n;
}
public function getNacionalidade(){
    return $this->nacionalidade;
}
public function setNacionalidade($na){
    $this->nacionalidade = $na;
}
public function getIdade(){
    return $this->idade;
}
public function SetIdade($ida){
    $this->idade = $ida;
}
public function getAltura(){
    return $this->altura;
}
public function setAltura($a){
    $this->altura = $a;
}
public function getPeso(){
    return $this->peso;
}
public function setPeso($p){
    $this->peso = $p;
}
public function getCategoria(){
    return $this->categoria;
}
public function setCategoria($c){
    $this->categoria = $c;
}
public function getVitorias(){
    return $this->vitorias;
}
public function setVitorias($v){
    $this->vitorias = $v;
}
public function getDerrotas(){
    return $this->derrotas;
}
public function setDerrotas($d){
    $this->derrotas = $d;
}
public function getEmpates(){
    return $this->empates;
}
public function setEmpates($e){
    $this->empates = $e;
}

















}

?>