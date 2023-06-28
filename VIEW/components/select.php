<?php
include_once '../../BLL/bllInstrutor.php';
include_once '../../BLL/bllVeiculo.php';
include_once '../../BLL/bllAluno.php';

function instrutor()
{

    $bll = new \BLL\bllInstrutor();

    $instrutores = $bll->Select();
?>
    <br>
    <select name="instrutor" class="form-select" id="instrutor">
        <option value="0">Escolher instrutor</option>
        <?php foreach ($instrutores as $instrutor) : ?>
            <option value="<?php echo $instrutor->getId(); ?>" ><?php echo $instrutor->getNome() ?></option>
        <?php endforeach ?>
    </select>

<?php } 

function veiculo()
{

    $bll = new \BLL\bllVeiculo();

    $veiculos = $bll->Select();
?>
    <br>
    <select name="veiculo" class="form-select" id="veiculo">
        <option value="0">Escolher veiculo</option>
        <?php foreach ($veiculos as $veiculo) : ?>
            <option value="<?php echo $veiculo->getId() ?>"><?php echo $veiculo->getModelo() ?></option>
        <?php endforeach; ?>
    </select>

<?php } 

function aluno()
{

    $bll = new \BLL\bllAluno();

    $alunos = $bll->Select();
?>
    <br>
    <select name="aluno" class="form-select" id="aluno">
        <option value="0">Escolher aluno</option>
        <?php foreach ($alunos as $aluno) : ?>
            <option value="<?php echo $aluno->getId() ?>"><?php echo $aluno->getNome() ?></option>
        <?php endforeach; ?>
    </select>

<?php } ?>