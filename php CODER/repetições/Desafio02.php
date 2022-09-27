<style>
    table{
        padding: 15px;
        text-align: center;
        
    }
    td{
        border: 1px solid black;
        padding: 15px;
    }
</style>
<table>
    
    <?php 
    $num = 1;
    $linhas = 5;
    $colunas = 5;
    for($i = 0; $i < $linhas; $i++){
    
        echo "<tr><br>";
    
        for($j = 0; $j < $colunas; $j++){
    
        echo "<td>$num</td>" ;
    
        $num++;
        }
        echo "</tr>" ;
    }
    ?>

</table>