<?php
include_once '../../MODEL/Curso.php';
include_once '../../BLL/bllCurso.php';
$curso = new \MODEL\Curso();

$curso->setLetra($_POST['txtletra']);
$curso->setValor($_POST['txtvalor']);

$bll = new \BLL\bllCurso();

$bll->Insert($curso);

header("location: lstcurso.php");

?>


