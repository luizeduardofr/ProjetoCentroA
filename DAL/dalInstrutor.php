<?php

    namespace DAL;
    include_once 'C:\xampp\htdocs\ProjetoCentroA\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\ProjetoCentroA\MODEL\Instrutor.php';

    class dalInstrutor{

        public function Select(){
            $sql = "select * from instrutor;";

            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            foreach ($result as $linha){
                $instrutor = new \MODEL\Instrutor($linha['id'], $linha['nome'], $linha['cpf'], 
                                                  date('d/m/Y',strtotime($linha['nascimento'])));
  
                $lstinstrutor[] = $instrutor; 

                return $lstinstrutor;
            }
        }

        public function SelectID(int $id){
            $sql = "select * from instrutor where id=?;";
            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $instrutor = new \MODEL\Instrutor($linha['id'], $linha['nome'], $linha['cpf'], date('d/m/Y',strtotime($linha['nascimento'])));

            return $instrutor;
        }

        public function SelectNome(string $nome){
            $sql = "select * from instrutor where nome like '%" . $nome . "%' order by nome;";

            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $result = $pdo->query($sql);

            $lstinstrutor = NULL;
            foreach($result as $linha){
                $instrutor = new \MODEL\Aluno($linha['id'], $linha['nome'], $linha['cpf'], date('d/m/Y',strtotime($linha['nascimento'])));

                $lstinstrutor[] = $instrutor;
    
                return $instrutor;
            }
        }

        public function Insert(\MODEL\Instrutor $instrutor){
            $con = Conexao::conectar();
            $sql = "INSERT INTO instrutor (nome, cpf, nascimento)
                    VALUES ('{$instrutor->getNome()}, '{$instrutor->getCpf()}', '{$instrutor->getNascimento()}');";
            
            $result = $con->query($sql);
            $con = Conexao::desconectar();
            return $result;
        }

        public function Update(\MODEL\Instrutor $instrutor){
            $sql = "UPDATE instrutor SET nome=?, cpf=?, nascimento=? WHERE id=?";

            $pdo = Conexao::conectar();
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($instrutor->getNome(), $instrutor->getCpf(), 
                                            $instrutor->getNascimento(), $instrutor->getId()));
            $con = Conexao::desconectar();
            return $result;
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