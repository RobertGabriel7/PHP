<?php               
/* 
$tipo = $_POST["tipo_da_conta"]; */
class Banco7{


    /* Atributos */

public $numConta;
protected $tipo;
private $dono;
private $saldo;
private $status;


    /* Métodos */

    public function AbrirConta($abriu, $dono1){
        /* Se é conta corrente (50 reais) ou poupança (150 reais)  */
        $this->status = true;

        $this->tipo = strtoupper($abriu); /* A tag strtoupper deixa todos os caracteres em MAIUSCULOS */
        $this->dono = ucfirst( strtolower($dono1)); /* strtolower deixa as strings minusculas */

        if ($this->tipo == "CC"){
            echo "<hr>- Conta Corrente solicitada e você ganhou R$ 50, {$this->getDono()}.<br><hr>";
            $this->saldo += 50;
            
        }
        elseif($this->tipo == "CP"){
            echo "<hr>- Conta Poupança solicitada e você ganhou R$ 150, {$this->getDono()}.<br><hr>";
            $this->saldo = 150;
        
        }
    }



public function fecharConta(){
    if($this->saldo > 0){
        echo "<hr>Conta com R$ {$this->getSaldo()}, não pode fechar a conta com dinheiro.<br><hr>";
    }elseif($this->saldo < 0 ){
        echo "Conta em Débito, falta pagar a fatura.";
    }else{
        echo "Conta encerrada.<br>";
        $this->status = false;
        $this->saldo = null;
    }
}

public function depositar($v){
    if($this->status == true){
        $this->saldo += $v;
        
        echo "<br><hr> Saldo atua0l: R$ {$this->getSaldo()}. <br><hr>";

    }else{
        echo "Conta inexistente, impossivel depositar";
    }
}

public function sacar($v){
    if ($this-> status == true){
       if($this->saldo > 0 && $v <= $this->saldo){

           $this->setSaldo($this->getSaldo() - $v);

                 echo "<br><hr> Saldo atual após sacar $v: R$ {$this->getSaldo()}.<br><hr>";
               

       }else{
        echo "Saldo insuficiente.";
       }
    }else{
        echo "Conta inexistente";
    }
}

public function pagamentoMensal(){
    $valor = 0;

    if($this->tipo == "CC"){
        $valor = 12;
    }else{
        $valor = 20;
    }

    if($this->status = true){
        if($this->saldo > $valor){
            $this->saldo - $valor;
        }else{
            echo "Saldo insuficiente.";
        }

    }else{
        echo "Conta inexistente.";
    }
}

    /* Método Especial */

public function __construct()
{
    $this->saldo = 0;
    $this->status = 0;
   
    
}

/* GETTERS E SETTERS */


public function getNumConta(){
    return $this->numConta;
}

/* Nesse caso precisa colocar uma variavel dentro do parenteses (é um parametro) */
public function setNumConta($numeroDaConta){
    $this->numConta = $numeroDaConta;
}

public function getTipoDaConta(){
    return $this->tipo;
}

public function setTipoDaConta($oTipo){
    
    $this->tipo =  strtoupper($oTipo);
}

public function getDono(){
    return $this->dono;
}

public function setDono($oDono){
    $this->dono = $oDono;
}

public function getSaldo(){
    return $this->saldo;
}

public function setSaldo($oSaldo){
    $this->saldo = $oSaldo;
}
}



?>