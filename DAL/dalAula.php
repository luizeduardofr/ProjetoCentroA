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
        $sql = "SELECT * FROM aula WHERE id = :id;";
        
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();
    
        if (!$linha) {
            return null;
        }
    
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
    
        return $aula;
    }
    
    public function SelectNome(string $nome){
        $sql = "SELECT * FROM aula WHERE nome LIKE :nome ORDER BY nome;";
    
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':nome', '%' . $nome . '%', \PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);
        Conexao::desconectar();
    
        $lstAulas = [];
        foreach ($result as $linha) {
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

        public function Update(\MODEL\Aula $aula){
            $sql = "UPDATE aula SET data= :data, id_instrutor= :id_instrutor, id_aluno= :id_aluno, id_veiculo= :id_veiculo WHERE id= :id";

            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->bindValue(':data', $aula->getData());              
            $query->bindValue(':id_instrutor', $aula->getInstrutor()->getId());  
            $query->bindValue(':id_aluno', $aula->getAluno()->getId());  
            $query->bindValue(':id_veiculo', $aula->getVeiculo()->getId());  
            $query->execute();
            Conexao::desconectar();
        }

        public function Delete(int $id) {
            $sql = "DELETE FROM aula WHERE id = :id;";
        
            $conn = Conexao::conectar();
            $query = $conn->prepare($sql);
            $query->bindValue(':id', $id, \PDO::PARAM_INT);
            $query->execute();
            Conexao::desconectar();
        }
}
