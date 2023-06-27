<?php
    namespace DAL;
    include_once 'C:\xampp\htdocs\ProjetoCentroA\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\ProjetoCentroA\MODEL\Aluno.php';

    class dalAluno{

        public function Select(){
            $sql = "select * from aluno;";

            $con = Conexao::conectar(); 
            $result = $con->query($sql); 
            Conexao::desconectar();

            $lstAluno = []; 

        foreach ($result as $linha){
            $aluno = new \MODEL\Aluno();

            $aluno->setId($linha['id']);
            $aluno->setNome($linha['nome']);
            $aluno->setCpf($linha['cpf']);
            $aluno->setNascimento($linha['nascimento']);
            $aluno->setEndereco($linha['endereco']);
            
            $lstAluno[] = $aluno;
        }
        return $lstAluno;
    }

        public function SelectID(int $id){
            $sql = "select * from aluno where id= :id;";
            
            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->bindValue(':id', $id, \PDO::PARAM_INT);
            $query->execute ();
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            if(!$linha){
                return null;
            }
            $aluno = new \MODEL\Aluno();

            $aluno->setId($linha['id']);
            $aluno->setNome($linha['nome']);
            $aluno->setCpf($linha['cpf']);
            $aluno->setNascimento($linha['nascimento']);
            $aluno->setEndereco($linha['endereco']);

            return $aluno;
        }

        public function SelectNome(string $nome){
            $sql = "select * from aluno where nome like '%" . $nome . "%' order by nome;";

            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->bindValue(':nome', '%' . $nome . '%', \PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);

            $lstAluno = [];
            foreach($result as $linha){
                $aluno = new \MODEL\Aluno();

                $aluno->setId($linha['id']);
                $aluno->setNome($linha['nome']);
                $aluno->setCpf($linha['cpf']);
                $aluno->setNascimento($linha['nascimento']);
                $aluno->setEndereco($linha['endereco']);

                $lstaluno[] = $aluno;
    
            }
                return $lstaluno;
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

        public function Delete(int $id) {
            $sql = "DELETE FROM aluno WHERE id = :id;";
        
            $conn = Conexao::conectar();
            $query = $conn->prepare($sql);
            $query->bindValue(':id', $id, \PDO::PARAM_INT);
            $query->execute();
            Conexao::desconectar();
        }
    }
?>