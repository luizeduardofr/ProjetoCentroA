<?php
include('../../BLL/protect.php');


function nav()
{ ?>

    <nav class="navbar navbar-expand-lg navbar-light" style='background-color: #00ff5573; margin-bottom: 20px;'>
        <div class="container-fluid">
            <a class="navbar-brand fs-3 px-4" href="../menu/menu.php">Auto Escola Tarumã - Centro A</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../menu/menu.php">Inicio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="adicionar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Adicionar
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="adicionar">
                            <li><a class="dropdown-item" href="../instrutor/addInstrutor.php">Instrutor</a></li>
                            <li><a class="dropdown-item" href="../curso/addCurso.php">Categoria</a></li>
                            <li><a class="dropdown-item" href="../veiculo/addVeiculo.php">Veiculo</a></li>
                            <li><a class="dropdown-item" href="../aluno/addAluno.php">Aluno</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="listas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Listas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="listas">
                            <li><a class="dropdown-item" href="../instrutor/lstInstrutor.php">Instrutor</a></li>
                            <li><a class="dropdown-item" href="../curso/lstCurso.php">Categoria</a></li>
                            <li><a class="dropdown-item" href="../veiculo/lstVeiculo.php">Veiculo</a></li>
                            <li><a class="dropdown-item" href="../aluno/lstAluno.php">Aluno</a></li>
                            <li><a class="dropdown-item" href="../aula/lstAula.php">Agendamentos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="user" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['usuario'] ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="user">
                            <li><a class="dropdown-item" href="../login/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<?php } ?>