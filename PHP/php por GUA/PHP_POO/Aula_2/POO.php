<pre>
    
    <?php
    
    class caneta{
    
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;
    
        function tampar(){
            $this->tampada = true;
        }
        function rabiscar(){
            if ($this->tampada == true) {
                echo 'A CANETA ESTÁ TAMPADA!';
            }else{
                echo 'Rabiscando ...';
            }
        }
        function destampar(){
    
            /* if($this->tampada == true){
                echo 'Agora está destampada a caneta.';
            }else{
                echo 'A caneta já está destampada!';
            } */
        }
   
    }

    
    
    $opa = new caneta;
    $opa->modelo = 'Faber Castel';
    $opa->cor = 'Preto';
    $opa->ponta = 0.5;
    $opa->carga = '97%';
    $opa->tampada = true;
    
    print_r($opa);
    echo '<br><hr>';

  
    ?>
</pre>