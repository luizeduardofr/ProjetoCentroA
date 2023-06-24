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
                $aluno = new \MODEL\Aluno($linha['id'], $linha['nome'], $linha['cpf'], date('d/m/Y',strtotime($linha['nascimento'])),  $linha['endereco']);
  
                $lstaluno[] = $aluno; 

                return $lstaluno;
            }
        }

        public function SelectID(int $id){
            $sql = "select * from aluno where id=?;";
            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $aluno = new \MODEL\Aluno($linha['id'], $linha['nome'], $linha['cpf'], date('d/m/Y',strtotime($linha['nascimento'])),  $linha['endereco']);

            return $aluno;
        }

        public function SelectNome(string $nome){
            $sql = "select * from aluno where nome like '%" . $nome . "%' order by nome;";

            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $result = $pdo->query($sql);

            $lstAluno = NULL;
            foreach($result as $linha){
                $aluno = new \MODEL\Aluno($linha['id'], $linha['nome'], $linha['cpf'], date('d/m/Y',strtotime($linha['nascimento'])),  $linha['endereco']);

                $lstaluno[] = $aluno;
    
                return $aluno;
            }
        }


        public function Insert(\MODEL\Aluno $aluno){
            $con = Conexao::conectar();
            $sql = "INSERT INTO aluno (nome, cpf, nascimento, endereco)
                    VALUES ('{$aluno->getNome()}, '{$aluno->getCpf()}', '{$aluno->getNascimento()}',
                            '{$aluno->getEndereco()}');";
            
            $result = $con->query($sql);
            $con = Conexao::desconectar();
            return $result;
        }

        public function Update(\MODEL\Aluno $aluno){
            $sql = "UPDATE aluno SET nome=?, cpf=?, nascimento=?, endereco=? WHERE id=?";

            $pdo = Conexao::conectar();
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($aluno->getNome(), $aluno->getCpf(), $aluno->getNascimento(),
                                            $aluno->getEndereco(), $aluno->getId()));
            $con = Conexao::desconectar();
            return $result;
        }

        public function Delete(int $id){
            $sql = "DELETE from aluno WHERE id=?";

            $pdo = Conexao::conectar();
            $pdo->setAttibute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return $result;
        }
    }
?>