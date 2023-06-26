<?php

    use BLL\bllAluno;

    include_once '../../BLL/bllAluno.php';

    if (isset($_GET['busca']))
        $busca = $_GET['busca'];
    else $busca = null;

    $bll = new \BLL\bllAluno();

    if($busca == null)
        $lstaluno = $bll->Select();
    else $lstaluno = $bll->SelectNome($busca);
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
                <td><?php echo $aluno->getId() ?></td>
                <td><?php echo $aluno->getNome(); ?></td>
                <td><?php echo $aluno->getCpf(); ?></td>
                <td><?php echo $aluno->getNascimento(); ?></td>
                <td><?php echo $aluno->getEndereco(); ?></td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='detAluno.php?id=' +
                                     <?php echo $aluno->getId(); ?>">
                        <i class="material-icons">list</i>
                    </a>

                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='edtAluno.php?id=' +
                                    <?php echo $aluno->getId(); ?>">
                        <i class="material-icons">edit</i>
                    </a>

                    <a class="btn-floating btn-small waves-effect waves-light red" 
                               onclick="JavaScript: remover(<?php echo $aluno->getId(); ?>);">
                        <i class="material-icons">delete_forever</i>
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
</body>
</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Aluno ' + id + '?')) {
            location.href = 'remoAluno.php?id=' + id;
        }
    }
</script>