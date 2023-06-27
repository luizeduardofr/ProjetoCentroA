<?php
session_start();

require_once '../../DAL/conexao.php';

use DAL\Conexao;

$codigoError = $senhaError = $loginError = "";


if (isset($_POST['codigo']) && isset($_POST['senha'])) {

    if (strlen($_POST['codigo']) == 0) {
        $codigoError = "Preencha seu login";
    } else if (strlen($_POST['senha']) == 0) {
        $senhaError = "Preencha sua senha";
    } else {
        $codigo = $_POST['codigo'];
        $senha = $_POST['senha'];

        $conexao = Conexao::conectar();

        $codigo = $conexao->quote($codigo);
        $senha = $conexao->quote(md5($senha));

        $sql = "SELECT * FROM aluno WHERE id = $codigo AND senha = $senha";

        $result = $conexao->query($sql);

        if ($result->rowCount() == 1) {
            $usuario = $result->fetch(PDO::FETCH_ASSOC);

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: ../menuPrincipal/painel.php");
            exit();
        } else {
            $loginError = "Código ou senha incorretos";
        }

        Conexao::desconectar();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="box">
        <h2>Login</h2>
        <form action="">
            <div class="inputBox">
                <input type="text" name="usuario" autocomplete="off" autofocus="" required>
                <label for="">Usuário</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required>
                <label for="">Senha</label>
            </div>
            <input type="submit" value="Entrar">
        </form>
    </div>

    <script>
        document.getElementById('senhaEye').addEventListener('click', function() {
            let passowerInput = document.getElementById('senha')
            if (passowerInput.type == 'password') {
                passowerInput.type = 'text'
                this.innerHTML = '<i class="fa-solid fa-eye-slash"></i>'
            } else {
                passowerInput.type = 'password';
                this.innerHTML = '<i class="fa-solid fa-eye"></i>'
            }
        })
    </script>

</body>

</html>