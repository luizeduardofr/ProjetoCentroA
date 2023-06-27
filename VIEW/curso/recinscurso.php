<?php
include_once '../../MODEL/Curso.php';
include_once '../../BLL/bllCurso.php';
$curso = new \MODEL\Curso();

$curso->setLetra($_POST['txtLetra']);
$curso->setValor($_POST['txtValor']);

$bll = new \BLL\bllCurso();

$bll->Insert($curso);

header("location: lstcurso.php");

?>


