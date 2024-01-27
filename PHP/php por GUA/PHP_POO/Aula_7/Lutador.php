<?php 


include "../Aula_7/Recursos/MethodDosLutadores.php";


/* Abstração: é abstrair somente o que importa num determinado exercicio  */

Class Lutador implements MethodLutadores {

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



public function __construct($nome1,$nacionalidade1,$idade1,$altura1,$peso1, $vitorias1,$derrotas1,$empates1){

    $this->setNome($nome1);
    $this->setNacionalidade($nacionalidade1);
    $this->setIdade($idade1);
    $this->setAltura($altura1);
    $this->setPeso($peso1);
    $this->setVitorias($vitorias1);
    $this->setDerrotas($derrotas1);
    $this->setEmpates($empates1);
}



/* Methods */



public function apresentar(){
    echo "Com vocês.... ";
    echo "<br>---- <strong>{$this->getNome()}</strong> ----<br>";
    echo "Nacionalidade: <strong>{$this->getNacionalidade()}</strong><br>";
    echo "Idade: <strong>{$this->getIdade()}</strong><br>";
    echo "Altura: <strong>{$this->getAltura()}</strong><br>";
    echo "Peso: {$this->getPeso()}<br>";
    echo "Categoria: {$this->getCategoria()}<br>";
    echo "Vitorias: {$this->getVitorias()}<br>";
    echo "Derrotas: {$this->getDerrotas()}<br>";
    echo "Empates: {$this->getEmpates()}<br>";
    


}

public function status(){ 
    $this->getNome();
    echo "É peso: {$this->getCategoria()}";
    echo $this->getVitorias(), " Vitórias.";
    echo $this->getDerrotas(), " Derrotas.";
    echo $this->getEmpates(), " Empates.";
}

public function ganharLuta(){
    $this->setVitorias($this->getVitorias() + 1);
}

public function perderLuta(){
    $this->setDerrotas($this->getDerrotas() + 1);
}

public function empatarLuta(){
    $this->setEmpates($this->getEmpates() + 1);
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
public function setIdade($ida){
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
        $this->getCategoria();
        
}
public function getCategoria(){
    return $this->categoria;
}
 
private function setCategoria($c){
    $this->categoria = $c;
     
    /* Nesse caso, como tem outra condição ( elseif ) alem de 52.2, o php entende que se passar da outra condição que é 70.3, vai dar ""true"". Então com a proxima condição funciona assim: if ($x > 52.2  && $x < 70.2) { "" Vai dar True "" } */
    if($this->peso < 52.2){
        $c = "Peso invalido";
    }elseif ($this->peso < 70.3){
        $c = "Peso leve";
    }elseif ($this->peso < 83.9){
        $c = "Peso médio";
        /* Aqui nessa ultima condição ( elseif ) não tem mais condições alem dessa ultima, então o php entende que if ( peso < 120.2 ) vai dar true, else vai dar false */
    }elseif ($this->peso < 120.2){
        $c = "Peso pesado.";
    }else{
        echo "Peso invalido.";
    }

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