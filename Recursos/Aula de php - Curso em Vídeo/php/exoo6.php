<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body{

    background-color: rgb(211, 227, 231);

}
footer{

background-color: black;
position: absolute;
bottom:0px;
text-align: center;
/*Largura*/
width: 1263px;
/*Altura*/
height: auto;
line-height: 50px;

}
p{
    color: white;
}

h3{

background-position: 10%;
background-size: 40%;
padding: 5px;
position:absolute;
width: 500px;
height: 200px;
bottom: 40%;
background-color: rgb(0, 0, 0);
color: white;
margin: 70px 30%;
box-shadow: 3px 3px 0.3px rgb(11, 204, 238);
text-align: center;


}


</style>
</head>
<body>
<H3>
     
     <?php
     
     $valor = $_POST["r1"];
     
     $rq = sqrt($valor);
     
     echo"<p>Resultado:</p>";
     echo number_format($rq,2,);
     
     

    
    ?>
</H3>

    
    <footer>
        
    <a href="/Aula de php - Curso em Vídeo//php//formulario.html"><p>Voltar</p></a>
    
    </footer>
    

 

</body>
</html>


