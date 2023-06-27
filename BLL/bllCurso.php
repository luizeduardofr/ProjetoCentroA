<?php
    namespace BLL; 
    use DAL\dalCurso; 
    include_once '../../DAL/dalCurso.php';
    
    class bllCurso {

        public function Select (){
            $dal = new  \Dal\dalCurso(); 
           
            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new  \DAL\dalCurso(); 
           
            return $dal->SelectID($id);
        }

        public function Insert (\MODEL\Curso $curso){
           $dal = new \DAL\dalCurso();

           $dal->Insert($curso);
           
        }

        public function Update (\MODEL\Curso $curso){
           $dal = new \DAL\dalCurso(); 

           $dal->Update($curso);
        }

        public function Delete (int $id){
            $dal = new \DAL\dalCurso(); 
 
            $dal->Delete($id);
        }
    }
?>