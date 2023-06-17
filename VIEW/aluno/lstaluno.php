<?php

    include_once 'C:\xampp\htdocs\centroa\DAL\conexao.php';
    use DAL\Conexao;
    $sql = "select * from aluno;";
    $con = Conexao::conectar();
    $lstaluno = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Listar Alunos</title>
</head>

<body>
    <h1>Listar Alunos</h1>

    <table class="striped yellow accent-2">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>CPF</th>
            <th>NASCIMENTO</th>
            <th>ENDERECO</th>
        </tr>

        <?php
        foreach ($lstaluno as $aluno) {

        ?>
            <tr>
                <td><?php echo $aluno->getId; ?></td>
                <td><?php echo $aluno->getNome; ?></td>
                <td><?php echo $aluno->getCpf; ?></td>
                <td><?php echo $aluno->getNascimento; ?></td>
                <td><?php echo $aluno->getEndereco; ?></td>
            </tr>
        <?php
        }
        ?>

    </table>
</body>

</html>