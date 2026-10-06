<?php
include "conexao.php";

$nome = "";
$email = "";
$area_interesse = "";

$mensagem = "";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $area_interesse = $_POST["area_interesse"];
    if($nome === "" || $email === "" || $area_interesse === ""){
        $mensagem = "preencha todos os campos";
        echo "$mensagem";
    }else{
        $sql = "INSERT INTO usuario (nome, email, area_interesse) VALUES ('$nome','$email','$area_interesse')";
        $conexao->query($sql);
        $mensagem = "200";
        echo "{$mensagem}";
        $nome = "";
        $email = "";
        $area_interesse = "";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon</title>
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-color: rgba(64, 87, 163, 0.32);
    }
    
    #art_01{

        background-image: url("img/Copilot_20261005_184127.png");
        background-position: left;   
        background-size: cover;        
        background-repeat: no-repeat;  
        backface-visibility: hidden;
        position: relative;
        background-color: blue;
        margin: auto;
        margin-top: 30px;
        text-align: center;
        height: 900px ;
        width: 95%;
        border-radius: 20px;
        
        
    }
    #art_pri{
        position: absolute;
        background-color: rgb(249, 249, 252);   
        height: 87%;
        width: 87%;
        border-radius: 20px;
        left: 50%;
        top: 50%;
        transform: translate( -50% , -50%);
        box-shadow: 0px 0px 10px rgb(62, 99, 218) ;
    }
    #sec_01{
        position: absolute;
        background-color: rgb(64, 87, 163);       
        height: 100%;
        width: 56%;
        border-radius: 20px;
        left: 72%;
        top: 50%;

        transform: translate( -50% , -50%);
    }
    #receber{
        height: 35px ;
        width: 70%;
        margin: 10px auto;
        margin-top: 40px;
        border-radius: 20px 10px;
        border: 5px solid white;   

        }
    #enviar_01{
        background-color: white;
        height: 35px ;
        width: 50%;
        margin: 20px auto;  
        border-radius: 20px;   
        border: 5px solid white; 
        margin-bottom: 6%;  
    }
    #formu{
        margin-top: 20%;
    }
    #incricoes{
            background-color: white;
            border-radius: 20px;
            padding: 10px;
            margin-top: 10px;
            text-decoration: none;
    }
    #texto{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        position:absolute;
        height: 70%;
        width: auto;

        left: 10%;
        top: 13%;
        font-size: 30px;
        
    }
   
    @media (max-width: 1030px) { 
        #sec_01{
            width: 100%;
            height: 68%;
            position: relative;

            left: 50%;
            top: 60%;
            transform: none;

        }
        #texto{
            position: relative;
            top: 1%;
            font-size: 20px;
            transform: none;
        }
        
    }
    

</style>
<body>
    
    <article id="art_01">
    <article id="art_pri">
        <div id="texto">
        <h1 style="" >Hackathon</h1>
        <p>As incrições começaram<br>Se increva já</p>
        </div>
    <section id="sec_01">
    <form id="formu" action="index.php" method="POST">
        <input id="receber" type="text" name="nome" placeholder="nome"  ><br>
        <input id="receber" type="email" name="email" placeholder="email"  ><br>
        <input id="receber" type="text" name="area_interesse" placeholder="área de interesse" ><br>

        <button id="enviar_01" type="submit">enviar</button><br>
        <a id="incricoes" href="usuarios.php">vizualizar incrição</a>
    </form>
    </section>
    </article>
    </article>
</body>
</html>