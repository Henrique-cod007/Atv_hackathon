 <?php 
include "conexao.php";



$resultado = $conexao->query("SELECT * FROM usuario");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    table{
        width: 500px;
        border-collapse: collapse;
        margin: auto;
        padding: 10px;
        
        text-align: center;
    }
    tbody>tr:nth-child(2n){
            background-color: rgba(64, 87, 163, 0.64);
    }
    tr{
        border: 1px solid black;
    }
    th{
        border: 1px solid black;
    }
    td{
        
        border: 1px solid black;
    }
</style>
<body>
<table>
    <tr>
        <th colspan="3">Incrições hackathon</th>
    </tr>
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>email</th>
    </tr>
<?php while($linha = $resultado->fetch_assoc()) { ?>
<tr>
<td><?= $linha["Id"] ?></td>
<td><?= $linha["nome"] ?></td>
<td><?= $linha["email"] ?></td>
</tr>
 <?php } ?> 
 
</table>
</body>
</html>

