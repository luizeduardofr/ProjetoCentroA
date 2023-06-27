<?php
    include_once '../../MODEL/Aluno.php';
    include_once '../../BLL/bllAluno.php';

    $aluno = new \MODEL\Aluno();

    $aluno->setId($_POST['txtID']);
    $aluno->setNome($_POST['nome']);
    $aluno->setCpf($_POST['cpf']);
    $aluno->setNascimento($_POST['nascimento']);
    $aluno->setEndereco($_POST['endereco']);

    $bll = new \BLL\bllAluno();
    $bll->Update($aluno);

    header("location: lstaluno.php");
?>