<?php 
include('../../BLL/protect.php');

function nav()
{ ?>

    <nav class='navbar navbar-light justify-content-center fs-3 mb-5' style='background-color: #00ff5573;'>
        <div class="d-flex justify-content-between w-100">
            <a onclick="JavaScript:location.href='../../VIEW/menu/menu.php'" class="link-dark px-5">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <span>Auto Escola Tarumã - Centro A</span>
            <div class="dropdown px-5">
                <button class="bg-transparent border-0" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['usuario'] ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><button onclick="JavaScript:location.href='../../VIEW/aluno/lstaluno.php'" class="dropdown-item" type="button">Aluno</button></li>
                    <li><button onclick="JavaScript:location.href='../../VIEW/instrutor/lstinstrutor.php'" class="dropdown-item" type="button">Instrutor</button></li>
                    <li><button onclick="JavaScript:location.href='../../VIEW/curso/lstcurso.php'" class="dropdown-item" type="button">Categoria</button></li>
                    <li><button onclick="JavaScript:location.href='../../VIEW/veiculo/lstveiculo.php'" class="dropdown-item" type="button">Veículo</button></li>
                </ul>
            </div>
        </div>
    </nav>

<?php } ?>