<pre>
    <?php
    
    $array = [1,2,3,4,5,6,7];
    
    print_r($array);
    
    foreach ($array as $variavel => $valor) {
       
        if($array[$variavel] % 2 == 0){
            
            echo "par";
            echo "<br>";
        }else{
            echo "impar";
            echo "<br>";
        }
    }

    echo "<br>";

    echo"////////////////////////////////////////////////////////////////////////////////////////////
    <br> <br>";


$notas = [5.8,7.3,8.8,8.5,1,2.5];
$notasFinais = [];

foreach($notas as $nota){
    $notasFinais[] = round($nota);
}

print_r($notasFinais);

echo "<br><hr>";

$apenasOsAprovados2 = array_filter($notas, 'aprovados');

echo $apenasOsAprovados2;






























?>
</pre>