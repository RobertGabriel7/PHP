<pre>
    
    <?php
    
    
    $carros = array(
        1 => 'Lamborghini Huracan',
        'Camaro ZL1',
        'Porchi 911',
        'Dodge Chanllanger',
        'Rand Rouver');
    
    foreach ($carros as $indice => $carro) {
        echo $indice,". ",$carro,"<br>";
    };

    echo "<hr><br>";
        
    $matrix = [
    
        ['a','b','c','d'],['e','f','g']
    ];
    
    print_r($matrix);
    
    foreach ($matrix as $linha) {
        foreach($linha as $letra){
            echo $letra;
        }
        echo "<br>";
    }
    echo "<br><br>";
    $numeros = [1,2,3,4,5];

    foreach($numeros as &$dobrar){
        $dobrar +=2;
        echo "$dobrar <br>";
    }
    ?>
</pre>