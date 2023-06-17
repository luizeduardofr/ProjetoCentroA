<?php

    namespace DAL;
    include_once 'C:\xampp\htdocs\centroa\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\centroa\MODEL\Aluno.php';

    class dalAluno{

        public function Select(){
            $sql = "select * from aluno;";

            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            foreach ($result as $linha){
                $aluno = new \MODEL\Aluno(); 
  
                $aluno->setId($linha['id']); 
                $aluno->setNome($linha['nome']);
                $aluno->setCpf($linha['cpf']);
                
                $data = date_create($linha['nascimento']);
                $aluno->setNascimento(date_format($data, 'd-m-Y')); 
  
                $aluno->setEndereco($linha['endereco']);
  
                $lstaluno[] = $aluno; 
            }

            return $lstaluno;
        }

        public function SelectID(int $id){

        }

        public function Insert(){

        }

        public function Update(){
            
        }

        public function Delete(){
            
        }
    }

?>