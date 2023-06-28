<?php
    include_once '../../BLL/bllInstrutor.php';
    // include('../../BLL/protect.php');

    $id = $_GET['id'];

    $bll = new \BLL\bllInstrutor();
    $bll->Delete($id);

    header("location: lstinstrutor.php");

?>