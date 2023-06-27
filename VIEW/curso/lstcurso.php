<?php

include_once '../../DAL/dalCurso.php';
// DAL/dalCurso.php

use DAL\dalCurso;

$bll = new dalCurso();
$lstcurso = $bll->Select();


?>


<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Listar Curso</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">Listar Cursos</nav>

    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Letra</th>
                <th scope="col">Valor</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($lstcurso as $curso) {


            ?>
                <tr>
                    <td><?php echo $curso->getId() ?></td>
                    <td><?php echo $curso->getLetra() ?></td>
                    <td><?php echo $curso->getValor(); ?></td>
                    <td>
                        <i class="material-icons">add</i>
                        <i class="material-icons">create</i>
                            <a href="#"  onclick="JavaScript:location.href='deletecurso.php?id=' + <?php echo $curso->getId(); ?>"><i class="material-icons">delete</i></a>
                       </td>
                    
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>

</body>

</html>