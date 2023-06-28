<?php
session_start();

require_once '../../DAL/conexao.php';

use DAL\Conexao;

$loginError = "";

if (isset($_POST['usuario']) || isset($_POST['senha'])) {

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $conexao = Conexao::conectar();

        $usuario = $conexao->quote($usuario);
        $senha = $conexao->quote(md5($senha));

        $sql = "SELECT * FROM usuario WHERE usuario = $usuario AND senha = $senha";

        $stmt = $conexao->query($sql);

        if ($stmt->rowCount() == 1) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            $_SESSION['usuario'] = $usuario['usuario'];

            header("location: ../../VIEW/menu/menu.php");
            exit();
        } else {
             $loginError = "Código ou senha incorreta";
        }

        Conexao::desconectar();
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
        <h2>Efetuar Login</h2>
        <form method="POST">
            <div class="inputBox">
                <input type="text" name="usuario" autocomplete="off" autofocus="" required>
                <label for="">Usuário</label>
            </div>
            <div class="inputBox">
                <input type="password" name="senha" required>
                <label for="">Senha</label>
            </div>
            <input type="submit" value="Entrar">
            <?php if(isset($loginError)){
                echo "<div class='danger'>$loginError</div>";
            } ?>
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