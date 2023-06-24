<?php
include_once '../../BLL/bllAluno.php';
$id = $_GET['id'];

$bll = new \BLL\bllAluno();
$aluno = $bll->SelectID($id);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes de Operador</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container blue lighten-5 black-text col s12">
        <div class="center orange">
            <h1>Detalhes do Aluno</h1>
        </div>
        <div class="row">
            <div class="container">
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">
                        <h5> ID: <?php echo $aluno->getId(); ?> </h5>
                    </label>

                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                </div>
                <div class="input-field col s8">
                    <label for="nome" class="black-text bold">
                        <h5>Nome: <?php echo $aluno->getNome(); ?> </h5>
                    </label>
                </div>

                <div class="input-field col s8">
                    <label for="aniversario" class="black-text bold">
                        <h5>Aniversário: <?php echo $aluno->getAniversario(); ?> </h5>
                    </label>
                </div>

                <div class="input-field col s8">
                    <label for="salario" class="black-text bold">
                        <h5>Salário: <?php echo $aluno->getSalario(); ?> </h5>
                    </label>
                    <br> <br><br>
                </div>
            </div>

        </div>

        <div class="brown lighten-3 center col s12">
            <br>
            <button class="waves-effect waves-light btn orange" type="button" onclick="JavaScript:location.href='edtAluno.php?id=' +
                                    <?php echo $aluno->getId(); ?>">
                Editar <i class="material-icons">edit</i>
            </button>
            <button class="waves-effect waves-light btn red" type="button" onclick="JavasScript:remover(<?php echo $aluno->getId(); ?>);">

                Remover <i class="material-icons">delete_forever</i>
            </button>
            <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstaluno.php'">
                Listar <i class="material-icons">list</i>
            </button>
            <br>
            <br>
        </div>

    </div>
    <?php include_once '../footer.php';?>
</body>

</html>


<script type="text/javascript">
    function remover(id) {
        if (confirm('Excluir o Operador ' + id + '?')) {
            location.href = 'remoAluno.php?id=' + id;
        }
    }
</script>