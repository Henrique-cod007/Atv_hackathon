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
        background-position: center;   
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
    #sec_01{
        position: absolute;
        background-color: rgb(64, 87, 163);       
        height: 500px;
        width: 450px;
        border-radius: 20px;
        left: 50%;
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
        width: 70%;
        margin: 20px auto;
        margin-top: 25%;   
        border-radius: 20px;   
        border: 5px solid white;   
    }

</style>
<body>
    <main>
    <article id="art_01">
    <section id="sec_01">
    <form action="index.php" method="POST">
        <input id="receber" type="text" name="nome" placeholder="nome"  ><br>
        <input id="receber" type="email" name="email" placeholder="email"  ><br>
        <input id="receber" type="text" name="area_interesse" placeholder="área de interesse" ><br>

        <button id="enviar_01" type="submit">enviar</button><br>
        <a href="#">vizualizar pá</a>
    </form>
    </section>
    </article>
    </main>
</body>
</html>