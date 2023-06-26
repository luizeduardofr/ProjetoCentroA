<?php
    namespace DAL;
    include_once 'C:\xampp\htdocs\ProjetoCentroA\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\ProjetoCentroA\DAL\dalCurso.php';

    class dalCurso{

        public function Select(){
            $con = Conexao::conectar();

            $sql = "select * from curso;";
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            foreach($result as $linha){
                 $curso = new \MODEL\Curso();

                 $curso->setId($linha['id']);
                 $curso->setLetra($linha['letra']);
                 $curso->setValor($linha['valor']);
                 $lstcurso[]= $curso;
            }
            return $lstcurso;
            
        }

        public function SelectID(int $id){

        }

        public function Insert(){

        }

        public function Update(){
            
        }

        public function Delete(){
            
        }
    }

?>