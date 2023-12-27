<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
  <pre>
      
      <?php
      require_once 'pas';

      $op = new caneta;
      $op->modelo = 'Faber Castel Premium';
      $op->cor = 'Azul Mar';
      $op->ponta = 0.5;
      $op->carga = '95%';
      $op->tampada = true;
      $op->rabiscar();
      
      $op->destampar();
      echo "<br><hr>";
      $opa = new caneta;
      $opa->modelo = 'Faber Castel';
      $opa->cor = 'Preto';
      $opa->ponta = 0.5;
      $opa->carga = '97%';
      $opa->tampada = true;
      
       print_r($opa); 







      ?>
  </pre>

</body>
</html>