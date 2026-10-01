<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$conexao = new mysqli($servidor, $usuario , $senha , "hackathon_db");
$conexao->set_charset("utf8");
?>