<?php
    include_once '../../BLL/bllAluno.php';

    $id = $_GET['id'];

    $bll = new \BLL\bllAluno();
    $bll->Delete($id);

    header("location: lstaluno.php");

?>