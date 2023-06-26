<?php
include_once '../../MODEL/Curso.php';
include_once '../../BLL/bllCurso.php';
$curso = new \model\Curso();

$curso->setLetra($_POST['txtletra']);
$curso->setValor($_POST['txtvalor']);

echo "Letra: " . $curso->getLetra() . "</br>";
echo "Valor: " . $curso->getValor() . "</br>";

$bll = new \BLL\bllCurso();

$bll->Insert($curso);

?>


