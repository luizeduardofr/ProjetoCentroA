<?php
    include_once '../../MODEL/Aluno.php';
    include_once '../../BLL/bllAluno.php';

    $aluno = new \MODEL\Aluno();

    $aluno->setNome($_POST['txtNome']);
    $aluno->setCpf($_POST['txtCpf']);
    $aluno->setNascimento($_POST['txtNascimento']);
    $aluno->setEndereco($_POST['txtEndereco']);

    $bll = new \BLL\bllAluno();
    $bll->Insert($aluno);

    header("location: lstaluno.php");
?>