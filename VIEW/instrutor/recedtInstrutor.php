<?php
    include_once '../../MODEL/Instrutor.php';
    include_once '../../BLL/bllInstrutor.php';

    $instrutor = new \MODEL\Instrutor();

    $instrutor->setId($_POST['txtID']);
    $instrutor->setNome($_POST['txtNome']);
    $instrutor->setCpf($_POST['txtCpf']);
    $instrutor->setNascimento($_POST['txtNascimento']);

    $bll = new \BLL\bllInstrutor();
    $bll->Update($instrutor);

    header("location: lstinstrutor.php");
?>