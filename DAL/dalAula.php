<?php
    namespace DAL;
    include_once 'C:\xampp\htdocs\ProjetoCentroA\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\ProjetoCentroA\MODEL\Aula.php';
    include_once '../../BLL/bllAluno.php';
    include_once '../../BLL/bllVeiculo.php';
    include_once '../../BLL/bllInstrutor.php';

    class dalAula{

        public function Select(){
            $sql = "select * from aula;";

            $con = Conexao::conectar(); 
            $result = $con->query($sql); 
            Conexao::desconectar();

            $lstAulas = []; 

        foreach ($result as $linha){
            $aula = new \MODEL\Aula();

            $aula->setId($linha['id']);

            $bllInstrutor = new \BLL\bllInstrutor();
            $instrutor = $bllInstrutor->SelectID($linha['id_instrutor']);
            $aula->setInstrutor($instrutor);

            $bllAluno = new \BLL\bllAluno();
            $aluno = $bllAluno->SelectID($linha['id_aluno']);
            $aula->setAluno($aluno);

            $bllVeiculo = new \BLL\bllVeiculo();
            $veiculo = $bllVeiculo->SelectID($linha['id_veiculo']); 
            $aula->setVeiculo($veiculo);

            $aula->setData($linha['data']);
            
            $lstAulas[] = $aula;
        }
        return $lstAulas;
    }

        public function SelectID(int $id){
            $sql = "select * from aluno where id= :id;";
            
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->bindValue(':id', $id, \PDO::PARAM_INT);
            $query->execute();
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
            $sql = "select * from aluno WHERE nome LIKE :nome ORDER BY nome;";

            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->bindValue(':nome', '%' . $nome . '%', \PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $lstAluno = [];
            foreach($result as $linha){
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


        public function Insert(\MODEL\Aula $aula){
            $sql = "INSERT INTO aula (data, id_instrutor, id_aluno, id_veiculo)
                    VALUES (:data, :id_instrutor, :id_aluno, :id_veiculo);";

            $con = Conexao::conectar();  
            $query = $con->prepare($sql);
            $query->bindValue(':data', $aula->getData(), \PDO::PARAM_STR);              
            $query->bindValue(':id_instrutor', $aula->getInstrutor()->getId(), \PDO::PARAM_STR);  
            $query->bindValue(':id_aluno', $aula->getAluno()->getId(), \PDO::PARAM_STR);  
            $query->bindValue(':id_veiculo', $aula->getVeiculo()->getId(), \PDO::PARAM_STR);  
            $query->execute();
            Conexao::desconectar();
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
