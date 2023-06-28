<?php
    include_once '../../MODEL/Curso.php';
    include_once '../../BLL/bllCurso.php';

    $curso = new \MODEL\Curso();

    $curso->setId($_POST['txtID']);
    $curso->setLetra($_POST['letra']);
    $curso->setValor($_POST['valor']);

    $bll = new \BLL\bllCurso();
    $bll->Update($curso);

    header("location: lstcurso.php");
?>