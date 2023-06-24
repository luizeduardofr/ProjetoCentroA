<?php

namespace DAL;

include_once '../DAL/conexao.php';
include_once '../MODEL/Usuario.php';

class dalUsuario {

    public function SelectUser(string $usuario)
    {
        $sql = "select * from usuario where usuario LIKE ?;";
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($usuario));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $usuario = new \MODEL\Usuario();

        if ($linha != null) {
            $usuario->setId($linha['id']);
            $usuario->setUsuario($linha['usuario']);
            $usuario->setSenha($linha['senha']);
            $usuario->setEmail($linha['email']);
        }
        else $usuario = null; 

        return $usuario;
    }
}

?>