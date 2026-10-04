<?php 
include "conexao.php";


if($senha === $senha_correta){
$resultado = $conexao->query("SELECT * FROM usuario");
while($linha = $resultado->fetch_assoc()){
    echo $linha["Id"] ."-". $linha["nome"] ."-". $linha["email"]."<br>";
}
}


?>