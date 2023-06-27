<?php
include_once '../../BLL/bllCurso.php';
$id = $_GET['id'];

$bll = new \BLL\bllCurso();
$bll->Delete($id);

header('Location: lstcurso.php');


?>




