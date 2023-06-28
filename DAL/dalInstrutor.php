<?php

    namespace DAL;
    include_once 'C:\xampp\htdocs\ProjetoCentroA\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\ProjetoCentroA\MODEL\Instrutor.php';

    class dalInstrutor{

        public function Select(){
            $sql = "select * from instrutor;";

            $con = Conexao::conectar();
            $result = $con->query($sql);
            Conexao::desconectar();

            $lstinstrutor = [];

            foreach ($result as $linha){
                $instrutor = new \MODEL\Instrutor();
                $instrutor->setId($linha['id']);
                $instrutor->setNome($linha['nome']);
                $instrutor->setCpf($linha['cpf']);
                $instrutor->setNascimento($linha['nascimento']);

                $lstinstrutor[] = $instrutor; 
            }
            return $lstinstrutor;
        }

        public function SelectID(int $id){
            $sql = "select * from instrutor where id= :id;";
            
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->bindValue(':id', $id, \PDO::PARAM_INT);
            $query->execute();
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            if(!$linha){
                return null;
            }

            $instrutor = new \MODEL\Instrutor();
            $instrutor->setId($linha['id']);
            $instrutor->setNome($linha['nome']);
            $instrutor->setCpf($linha['cpf']);
            $instrutor->setNascimento($linha['nascimento']);

            return $instrutor;
        }

        public function SelectNome(string $nome){
            $sql = "select * from instrutor WHERE nome LIKE :nome ORDER BY nome;";

            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->bindValue(':nome', '%' . $nome . '%', \PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $lstinstrutor = [];
            foreach($result as $linha){
                $instrutor = new \MODEL\Instrutor();

                $instrutor->setId($linha['id']);
                $instrutor->setNome($linha['nome']);
                $instrutor->setCpf($linha['cpf']);
                $instrutor->setNascimento($linha['nascimento']);

                $lstinstrutor[] = $instrutor;
    
            }
                return $lstinstrutor;
        }

        public function Insert(\MODEL\Instrutor $instrutor){
            $sql = "INSERT INTO aluno (nome, cpf, nascimento)
                    VALUES (:nome, :cpf, :nascimento);";

            $con = Conexao::conectar();  
            $query = $con->prepare($sql);
            $query->bindValue(':nome', $instrutor->getNome(), \PDO::PARAM_STR);              
            $query->bindValue(':cpf', $instrutor->getCpf(), \PDO::PARAM_STR);  
            $query->bindValue(':nascimento', $instrutor->getNascimento(), \PDO::PARAM_STR);  
            $query->execute();
            Conexao::desconectar();
        }

        public function Update(\MODEL\Instrutor $instrutor){
    
            $sql = "UPDATE instrutor SET nome= :nome, cpf= :cpf, nascimento= :nascimento WHERE id= :id;";
    
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->bindValue(':id', $instrutor->getId(), \PDO::PARAM_INT);
            $query->bindValue(':nome', $instrutor->getNome(), \PDO::PARAM_STR);
            $query->bindValue(':cpf', $instrutor->getCpf(), \PDO::PARAM_STR);
            $query->bindValue(':nascimento', $instrutor->getNascimento(), \PDO::PARAM_STR);
            $query->execute();
            Conexao::desconectar();
        }

        public function Delete(int $id){
            $sql = "DELETE from instrutor WHERE id=?";

            $pdo = Conexao::conectar();
            $pdo->setAttibute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return $result;
        }
    }
?>