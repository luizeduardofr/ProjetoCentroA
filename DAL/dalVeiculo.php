<?php

    namespace DAL;
    include_once 'C:\xampp\htdocs\centroa\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\centroa\MODEL\Veiculo.php';

    class dalVeiculo{

        public function Select(){
            $sql = "select * from veiculo;";

            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            foreach ($result as $linha){
                $veiculo = new \MODEL\Veiculo($linha['id'], $linha['marca'], $linha['modelo'], $linha['placa']);
  
                $lstveiculo[] = $veiculo; 

                return $lstveiculo;
            }
        }

        public function SelectID(int $id){
            $sql = "select * from veiculo where id=?;";
            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar();

            $veiculo = new \MODEL\Veiculo($linha['id'], $linha['marca'], $linha['modelo'], $linha['placa']);

            return $veiculo;
        }

        public function SelectNome(string $modelo){
            $sql = "select * from veiculo where modelo like '%" . $modelo . "%' order by modelo;";

            $pdo = Conexao::conectar();
            $query = $pdo->prepare($sql);
            $result = $pdo->query($sql);

            $lstveiculo = NULL;
            foreach($result as $linha){
                $veiculo = new \MODEL\Instrutor($linha['id'], $linha['marca'], $linha['modelo'], $linha['placa']);

                $lstveiculo[] = $veiculo;
    
                return $veiculo;
            }
        }

        public function Insert(\MODEL\Veiculo $veiculo){
            $con = Conexao::conectar();
            $sql = "INSERT INTO veiculo (marca, modelo, placa)
                    VALUES ('{$veiculo->getMarca()}', '{$veiculo->getModelo()}', '{$veiculo->getPlaca()}');";
            $result = $con->query($sql);
            $con = Conexao::desconectar();
            return $result;
        }

        public function Update(\MODEL\Veiculo $veiculo){
            $sql = "UPDATE veiculo SET marca=?, modelo=?, placa=? WHERE id=?";

            $pdo = Conexao::conectar();
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($veiculo->getMarca(), $veiculo->getModelo(), $veiculo->getPlaca(),
                                            $veiculo->getId()));
            $con = Conexao::desconectar();
            return $result;
        }

        public function Delete(int $id){
            $sql = "DELETE from veiculo WHERE id=?";

            $pdo = Conexao::conectar();
            $pdo->setAttibute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return $result;
        }
    }
?>