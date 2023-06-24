<?php
    namespace BLL; 
    use DAL\dalAluno; 
    include_once '../../DAL/dalAluno.php';
    
    class bllAluno {

        public function Select (){
            $dal = new  \Dal\dalAluno(); 
           
            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new  \Dal\dalAluno(); 
           
            return $dal->SelectID($id);
        }

        public function SelectNome(string $nome){
            $dalAluno = new dalAluno(); 

            return $dalAluno->SelectNome($nome);
        }

        public function Insert (\MODEL\Aluno $aluno){
           $dal = new \DAL\dalAluno(); 

           $dal->Insert($aluno); 
        }

        public function Update (\MODEL\Aluno $aluno){
           $dal = new \DAL\dalAluno(); 

           $dal->Update($aluno);
        }

        public function Delete (int $id){
            $dal = new \DAL\dalAluno(); 
 
            $dal->Delete($id);
        }
    }
?>