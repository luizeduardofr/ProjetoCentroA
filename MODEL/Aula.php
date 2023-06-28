<?php

namespace MODEL;

class Aula
{
    private $id;
    private Instrutor $instrutor;
    private Aluno $aluno;
    private Veiculo $veiculo;

    private $data;


    public function __construct()
    {
        
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getInstrutor()
    {
        return $this->instrutor;
    }
    
    public function getNomeInstrutor()
    {
        return $this->instrutor->getNome();
    }

    public function setInstrutor(Instrutor $instrutor)
    {
        $this->instrutor = $instrutor;
    }

    public function getAluno()
    {
        return $this->aluno;
    }
    public function getNomeAluno()
    {
        return $this->aluno->getNome();
    }

    public function setAluno(Aluno $aluno)
    {
        $this->aluno = $aluno;
    }

    public function getVeiculo(){
        return $this->veiculo;
    }

    public function setVeiculo(Veiculo $veiculo){
        $this->veiculo = $veiculo;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getDataF()
    {
        return date('d/m/Y H:i:s', strtotime($this->data));
    }

    public function setData(string $data)
    {
        $this->data = $data;
    }
}
