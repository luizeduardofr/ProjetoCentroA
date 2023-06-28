<?php

// include('../../BLL/protect.php');

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

   <title>Cadastrar Instrutor</title>
</head>

<body>
   <?php include "../components/navbar.php"; echo nav()?>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Cadastrar Instrutor</h3>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="recaddInstrutor.php" method="POST" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Nome:</label>
                  <input type="text" class="form-control" name="txtNome" placeholder="Nome">
               </div>

               <div class="col">
                  <label class="form-label">CPF:</label>
                  <input type="text" class="form-control" name="txtCpf" placeholder="111.111.111-11">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Nascimento:</label>
               <input type="date" class="form-control" name="txtNascimento" placeholder="dd/mm/YYYY">
            </div>

            <div style="text-align:right"> 
               <button type="submit" class="btn btn-success" name="submit">Salvar</button>
               <a href="lstinstrutor.php" class="btn btn-danger">Cancelar</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

   <?php include_once '../../VIEW/footer/footer.php'; ?>

</body>

</html>