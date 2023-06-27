<?php
    include_once '../../MODEL/Veiculo.php';
    include_once '../../BLL/bllVeiculo.php';

    $veiculo = new \MODEL\Veiculo();

    $veiculo->setMarca($_POST['txtMarca']);
    $veiculo->setModelo($_POST['txtModelo']);
    $veiculo->setPlaca($_POST['txtPlaca']);

    $bll = new \BLL\bllVeiculo();
    $bll->Insert($veiculo);

    header("location: lstveiculo.php");
?>