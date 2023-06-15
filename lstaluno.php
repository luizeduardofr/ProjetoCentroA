<?php

    include_once 'conexao.php';
    $sql = "select * from aluno;";
    $con = Conexao::conectar();
    $lstaluno = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Alunos</title>
</head>
<body> 
    
</body>
</html>