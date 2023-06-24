<?php

    namespace DAL;
    include_once 'C:\xampp\htdocs\centroa\DAL\conexao.php';
    include_once '../DAL/dalCurso.php';

    class dalCurso{

        public function Select(){
            $sql = "select * from curso;";

            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            foreach ($result as $linha){
                $curso = new \MODEL\Curso($linha['id'], $linha['letra'], $linha['valor']);
  
                $lstcurso[] = $curso; 

                return $lstcurso;
            }
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