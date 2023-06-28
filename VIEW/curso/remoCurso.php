<?php
    include_once '../../BLL/bllCurso.php';
    // include('../../BLL/protect.php');

    $id = $_GET['id'];

    $bll = new \BLL\bllCurso();
    $bll->Delete($id);

    header("location: lstcurso.php");

?>
