<?php
    include_once '../../MODEL/Instrutor.php';
    include_once '../../BLL/bllInstrutor.php';

    $instrutor = new \MODEL\Instrutor();

    $instrutor->setNome($_POST['txtNome']);
    $instrutor->setCpf($_POST['txtCpf']);
    $instrutor->setNascimento($_POST['txtNascimento']);

    // var_dump($instrutor);
    $bll = new \BLL\bllInstrutor();
    $bll->Insert($instrutor);

    header("location: lstinstrutor.php");
?>