<pre>
    
    <?php
    
    
    $valores = array(
        "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF"
    );
    
    for ($i=0; $i <= count($valores); $i++) {
    
        if($i % 2 === 1)continue;
        echo "<br>",$valores[$i];
    
    }    
    ?>
    
</pre>
