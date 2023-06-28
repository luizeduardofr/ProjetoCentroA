<?php

namespace DAL;

include_once 'C:\xampp\htdocs\ProjetoCentroA\DAL\conexao.php';
include_once 'C:\xampp\htdocs\ProjetoCentroA\DAL\dalCurso.php';
include_once 'C:\xampp\htdocs\ProjetoCentroA\MODEL\Curso.php';


class dalCurso
{

    public function Select(){
        $sql = "select * from curso;";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        $lstcurso = [];

        foreach ($result as $linha) {
            $curso = new \MODEL\Curso();

            $curso->setId($linha['id']);
            $curso->setLetra($linha['letra']);
            $curso->setValor($linha['valor']);

            $lstcurso[] = $curso;
        }
        return $lstcurso;
    }

    public function SelectID(int $id){
        $sql = "select * from curso where id= :id;";
            
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
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

    public function Insert(\MODEL\Curso $curso){
        $sql = "INSERT INTO curso (letra, valor) VALUES (:letra, :valor);";

        $con = Conexao::conectar(); 
        $query= $con->prepare($sql);
        $query->bindValue(':letra', $curso->getLetra(), \PDO::PARAM_STR);
        $query->bindValue(':valor', $curso->getValor(), \PDO::PARAM_STR);
        $query->execute();
        $con = Conexao::desconectar();
    }

    public function Update(\MODEL\Curso $curso){
    
        $sql = "UPDATE curso SET letra= :letra, valor= :valor WHERE id= :id;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':id', $curso->getId(), \PDO::PARAM_INT);
        $query->bindValue(':letra', $curso->getLetra(), \PDO::PARAM_STR);
        $query->bindValue(':valor', $curso->getValor(), \PDO::PARAM_STR);
        $query->execute();
        Conexao::desconectar();
    }

    public function Delete($id) {
        $sql = "DELETE FROM curso WHERE id = :id;";
        
        $conn = Conexao::conectar();
        $query = $conn->prepare($sql);
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        Conexao::desconectar();
    }
}
