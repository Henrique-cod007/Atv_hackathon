<?php
include "conexao.php";

$nome = "";
$email = "";
$area_interesse = "";
$mensagem = "";
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $area_interesse = $_POST["area_interesse"];
    if($nome === "" || $email === "" || $area_interesse){
        $mensagem = "preencha todos os campos";
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
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="nome" placeholder="nome" required >
        <input type="email" name="email" placeholder="email" required >
        <input type="text" name="area_interesse" placeholder="área de interesse" required>

        <button type="submit">enviar</button>
    </form>
</body>
</html>