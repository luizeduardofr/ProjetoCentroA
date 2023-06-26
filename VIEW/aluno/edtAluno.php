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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
    <?php include_once '..menu.php'; ?>
    
    <div class="container teal lighten-5 black-text col s12">
        <div class="center orange">
            <h1>Editar Aluno</h1>
        </div>

        <div class="row">
            <form action="recedtAluno.php" method="POST" id="frminsAluno" class="col s12">

                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $aluno->getId(); ?></label>
                    </br> </br>
                    <input type="hidden" name="txtID" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s8">
                    <input id="nome" type="text" name="txtNome" value="<?php echo $aluno->getNome() ?>">
                    <label for="nome" class="black-text bold">Nome</label>
                </div>

                <div class="input-field col s8">
                    <input id="cpf" type="text" name="txtCpf" value="<?php echo $aluno->getCpf() ?>">
                    <label for="cpf" class="black-text bold">CPF</label>
                </div>

                <div class="input-field col s8">
                    <input id="nascimento" type="date" name="txtNascimento" value="<?php echo $aluno->getNascimento() ?>">
                    <label for="nascimento" class="black-text bold">Nascimento</label>
                </div>

                <div class="input-field col s8">
                    <input id="endereco" type="text" name="txtEndereco" value="<?php echo $aluno->getEndereco() ?>">
                    <label for="endereco" class="black-text bold">Endereço</label>
                </div>

                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstoperador2.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>

    <?php include_once '../footer.php'; ?>
</body>
</html>