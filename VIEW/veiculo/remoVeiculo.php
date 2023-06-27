<?php
    include_once '../../BLL/bllVeiculo.php';
    // include('../../BLL/protect.php');

    $id = $_GET['id'];

    $bll = new \BLL\bllVeiculo();
    $bll->Delete($id);

    header("location: lstveiculo.php");
?>