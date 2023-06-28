<?php

use BLL\bllAluno;

include_once '../../BLL/bllAluno.php';

if (isset($_GET['busca']))
  $busca = $_GET['busca'];
else $busca = null;

$bll = new \BLL\bllAluno();

if ($busca == null)
  $lstaluno = $bll->Select();
else $lstaluno = $bll->SelectNome($busca);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../view/css/formatacao.css">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Listar Alunos</title>
</head>

<body>
  <?php include "../components/navbar.php"; echo nav()?>
  <div class="container">
    <div class="text-center mb-4">
      <h3>Listar Aluno</h3>
    </div>
    <div class="card-search">
      <form action="../aluno/lstAluno.php" method="GET" id="" class="">
        <h5>Pesquisa de Alunos</h5>
        <div class="teste">
          <input type="text" class="input-pesquisa" id="txtBusca" name="busca">
          <button type="submit" class="btn btn-primary float-end"><span>Pesquisar</span></button>
        </div>
      </form>
    </div>
    <br>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">CPF</th>
          <th scope="col">Nascimento</th>
          <th scope="col">Endereço</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($lstaluno as $aluno) {


        ?>
          <tr>
            <td><?php echo $aluno->getId(); ?></td>
            <td><?php echo $aluno->getNome(); ?></td>
            <td><?php echo $aluno->getCpf(); ?></td>
            <td><?php echo $aluno->getNascimentoF(); ?></td>
            <td><?php echo $aluno->getEndereco(); ?></td>
            <td>
              <a onclick="JavaScript:location.href='addAluno.php?id='+(<?php echo $aluno->getId(); ?>)" class="link-dark"><i class="fa-solid fa-plus fs-5 me-3"></i></a>
              <a onclick="JavaScript:location.href='edtAluno.php?id='+(<?php echo $aluno->getId(); ?>)" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a onclick="JavaScript:remover(<?php echo $aluno->getId(); ?>)" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <?php include_once '../../VIEW/footer/footer.php'; ?>

</body>

</html>

<script>
  function remover(id) {
    if (confirm('Excluir o Aluno ' + id + '?')) {
      location.href = 'remoAluno.php?id=' + id;
    }
  }
</script>