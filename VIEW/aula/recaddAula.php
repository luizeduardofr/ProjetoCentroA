<?php
    include_once '../../MODEL/Aula.php';
    include_once '../../BLL/bllAula.php';
    include_once '../../BLL/bllAluno.php';
    include_once '../../BLL/bllVeiculo.php';
    include_once '../../BLL/bllInstrutor.php';

    
    $bllVeiculo = new \BLL\bllVeiculo();
    $veiculo = $bllVeiculo->SelectID($_POST['veiculo']);
    
    $bllAluno = new \BLL\bllAluno();
    $aluno = $bllAluno->SelectID($_POST['aluno']);
    
    $bllInstrutor = new \BLL\bllInstrutor();
    $instrutor = $bllInstrutor->SelectID($_POST['instrutor']);

    $aula = new \MODEL\Aula();

    $aula->setData($_POST['txtData']);
    $aula->setAluno($aluno);
    $aula->setVeiculo($veiculo);
    $aula->setInstrutor($instrutor);

    // var_dump($instrutor);
    $bll = new \BLL\bllAula();
    $bll->Insert($aula);

    header("location: lstAula.php");
?>