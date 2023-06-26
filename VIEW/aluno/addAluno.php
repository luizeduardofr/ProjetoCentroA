<?php

include('../../BLL/protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
</head>
<body>
    <?php include_once "../menu/menu.php"; ?>
     <div class="containerFunc">        
         <div class="card">             
            <h1>Cadastro de cliente</h1>             
            <form method="POST" action="recAddCliente.php">                  
                
            <label for="">Nome</label>                 
            <input type="text" name="txtNome">                 
            
            <div class="telCPF">                    
                 <div>                         
                    <label for="">Telefone</label>                         <input type="text" name="txtTelefone">                     </div>                      <div>                         <label for="">CPF</label>                         <input type="text" name="txtCpf">                     </div>                 </div>                  <div class="botao">                 <button class="btnConf" type="submit">Cadastrar</button>                     <button class="btnCanc" type="button" onclick="JavaScript:location.href='lsCliente.php'">                         Cancelar</button>                 </div>
</body>
</html>