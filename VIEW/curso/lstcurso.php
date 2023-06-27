<?php

include_once '../../DAL/conexao.php';

use DAL\Conexao;

$sql = "select * from curso;";
$con = Conexao::conectar();
$lstcurso = $con->query($sql);
?>


<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Listar Curso</title>
</head>

<body>
    <h1>Listar Curso</h1>

    <table class="striped yellow accent-2">
        <tr>
            <th>ID</th>
            <th>LETRA</th>
            <th>VALOR</th>

        </tr>

        <?php
        foreach ($lstcurso as $curso) {

        ?>
            <tr>
                <td><?php echo $curso['id']; ?></td>
                <td><?php echo $curso['letra']; ?></td>
                <td><?php echo $curso['valor']; ?></td>
            </tr>
        <?php
        }
        ?>

    </table>
</body>

</html>