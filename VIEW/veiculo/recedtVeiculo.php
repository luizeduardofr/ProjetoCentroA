<?php
    include_once '../../MODEL/Veiculo.php';
    include_once '../../BLL/bllVeiculo.php';

    $veiculo = new \MODEL\Veiculo();

    $veiculo->setId($_POST['txtID']);
    $veiculo->setMarca($_POST['txtMarca']);
    $veiculo->setModelo($_POST['txtModelo']);
    $veiculo->setPlaca($_POST['txtPlaca']);

    $bll = new \BLL\bllVeiculo();
    $bll->Update($veiculo);

    header("location: lstveiculo.php");
?>