<?php

include('../../BLL/protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
</head>
<body>
    <?php include_once "../menu/menu.php"; ?>
    <div class="container teal lighten-5 black-text col s12">
        <div class="center orange">
            <h1>Cadastrar Aluno</h1>
        </div>

        <div class="row">
            <form action="recaddAluno.php" method="POST" id="frmaddAluno" class="col s12">

                <div class="input-field col s8">
                    <input id="nome" type="text" name="txtNome">
                    <label for="nome" class="black-text bold">Nome</label>
                </div>

                <div class="input-field col s8">
                    <input id="cpf" type="text" name="txtCpf">
                    <label for="cpf" class="black-text bold">CPF</label>
                </div>

                <div class="input-field col s8">
                    <input id="nascimento" type="date" name="txtNascimento">
                    <label for="nascimento" class="black-text bold">Nascimento</label>
                </div>

                <div class="input-field col s8">
                    <input id="endereco" type="text" name="txtEndereco">
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
    <?php include_once '../footer.php';?>
</body>
</html>