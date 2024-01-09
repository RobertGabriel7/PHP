<?php               

$tipo = $_POST["tipo_da_conta"];
class Banco7{


    /* Atributos */

public $numConta;
protected $tipo;
private $dono;
private $saldo;
private $status;


    /* Métodos */

    public function AbrirConta($tipo){
        /* Se é conta corrente (50 reais) ou poupança (150 reais)  */
        if ($this->tipo === "CC"){
            echo "Conta Corrente solicitada e você ganhou R$ 50";
            $this->saldo += 50;
        }
        elseif($this->tipo === "CP"){
            echo "Conta Poupança solicitada e você ganhou R$ 150";
            $this->saldo = 150;
        }
        }



public function fecharConta(){
    if($this->saldo > 0){
        echo "Conta com dinheiro";
    }elseif($this->saldo < 0 ){
        echo "Conta em Débito";
    }else{
        echo "Conta encerrada.";
        $this->status = false;
    }
}

public function depositar($v){
    if($this->status == true){
        $this->status =+ $v;

    }else{
        echo "Conta inexistente";
    }
}

public function sacar(){

}

public function pagamentoMensal(){

}

    /* Método Especial */

public function __construct()
{
    $this->saldo = 0;
    $this->status = false;
    echo "O status da conta é $this->status e o saldo: $this->saldo";
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
    $this->tipo = $oTipo;
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


echo $tipo;

?>