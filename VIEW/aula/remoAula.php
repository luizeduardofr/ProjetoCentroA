<?php
    include_once '../../BLL/bllAula.php';
    include('../../BLL/protect.php');

    $id = $_GET['id'];

    $bll = new \BLL\bllAula();
    $bll->Delete($id);

    header("location: lstaula.php");
?>