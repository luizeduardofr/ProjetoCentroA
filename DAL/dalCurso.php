<?php

namespace DAL;

include_once 'C:\xampp\htdocs\ProjetoCentroA\DAL\conexao.php';
include_once 'C:\xampp\htdocs\ProjetoCentroA\DAL\dalCurso.php';
include_once 'C:\xampp\htdocs\ProjetoCentroA\MODEL\Curso.php';


class dalCurso
{

    public function Select()
    {
        $con = Conexao::conectar();

        $sql = "select * from curso;";
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($result as $linha) {
            $curso = new \MODEL\Curso();

            $curso->setId($linha['id']);
            $curso->setLetra($linha['letra']);
            $curso->setValor($linha['valor']);
            $lstcurso[] = $curso;
        }
        if(isset($lstcurso)){
            return $lstcurso;
        }else{
            return array();
        }
    }

    public function SelectID(int $id)
    {
        $sql = "select * from curso where id= :id;";
            
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute ();
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        if(!$linha){
            return null;
        }
        $curso = new \MODEL\Curso();

        $curso->setId($linha['id']);
        $curso->setLetra($linha['letra']);
        $curso->setValor($linha['valor']);

        return $curso;

    }

    public function Insert(\MODEL\Curso $curso)
    {
        $con = Conexao::conectar(); 
        $sql = "INSERT INTO curso (letra, valor) 
               VALUES ('{$curso->getLetra()}', '{$curso->getValor()}');";
    
        $result = $con->query($sql); 
        $con = Conexao::desconectar();
        return $result; 
    }

    public function Update(\MODEL\Curso $curso)
    {
        $sql = "UPDATE curso SET letra=?, valor=? WHERE id=?";

        $pdo = Conexao::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($curso->getLetra(), $curso->getValor(), $curso->getId()));
        $con = Conexao::desconectar();
        return $result;


    }

    public function Delete($id)
    {
        $sql = "DELETE FROM curso WHERE id = :id;";
        
        $conn = Conexao::conectar();
        $query = $conn->prepare($sql);
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        Conexao::desconectar();

    }
}
