<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Curso</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    <div class="container amber darken-4">
        <div class="center lime">
            <h1>Inserir Curso</h1>
        </div>

        <div class="row">
            <form action="recinscurso.php" method="$_POST" id="frminscurso" class="col s12">
                <div class="input-field col s7">
                    <input id="letra" type="text" name="txt_letra">
                    <label for="letra" class="black-text bold">LETRA</label>
                </div>
                <div class="input-field col s7">
                    <input id="valor" type="text" name="txt_valor">
                    <label for="valor" class="black-text bold">VALOR</label>
                </div>

                <div class="cyan accent-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        GRAVAR <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        LIMPAR <i class="material-icons">clear</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button">
                        VOLTAR <i class="material-icons">keyboard_return</i>
                    </button>
                    <br>
                    <br>



                </div>
            </form>
        </div>




    </div>





</body>

</html>