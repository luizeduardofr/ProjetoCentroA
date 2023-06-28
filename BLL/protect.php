<?php

if(!isset($_SESSION))
    session_start();

if(!isset($_SESSION['usuario']))
    die("Você não pode acessar essa página porque não está logado.<p><a href=\"../login/login.php\">Entrar</a></p>");

?>