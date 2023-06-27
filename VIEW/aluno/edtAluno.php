<?php
include_once '../../BLL/bllAluno.php';
// include('../../BLL/protect.php');
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

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Editar Aluno</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">Auto Escola Tarumã - Centro A</nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Editar Aluno</h3>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="recedtAluno.php" method="post" style="width:50vw; min-width:300px;">
                <div class="col">
                    <input type="hidden" name="txtID" value=<?php echo $id; ?>>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="nome" value="<?php echo $aluno->getNome(); ?>">
                    </div>

                    <div class="col">
                        <label class="form-label">CPF:</label>
                        <input type="text" class="form-control" name="cpf" value="<?php echo $aluno->getCpf(); ?>">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nascimento:</label>
                    <input type="date" class="form-control" name="nascimento" value="<?php echo $aluno->getNascimento(); ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Endereço:</label>
                    <input type="text" class="form-control" name="endereco" value="<?php echo $aluno->getEndereco(); ?>">
                </div>

                <div style="text-align:right">
                    <button type="submit" class="btn btn-success" name="submit">Atualizar</button>
                    <a href="lstaluno.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

<?php include_once '../../VIEW/validacao/footer.php'; ?>

</html>