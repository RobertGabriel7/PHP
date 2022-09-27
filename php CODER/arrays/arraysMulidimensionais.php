<pre>
    
    <?php
    
    $dados = array(
    
        array(
            "Nome" => "Robert",
            "Idade" => "19 anos",
            "Altura" => "1.78"),
        array(
            "Carro" => "Lamborghini", 
            "Casa" => "Jardins",
            "Bateria" => "Odery"),
        array(),
    
    );
    print_r($dados);
    echo "<hr>";

echo $dados[1]["Carro"];

echo "<br><br>";

echo $dados[2]["opa"] = "eita";

echo "<hr>";

print_r($dados);

?>
</pre>
