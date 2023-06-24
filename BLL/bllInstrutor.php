<?php
    namespace BLL; 
    use DAL\dalInstrutor; 
    include_once '../../DAL/dalInstrutor.php';
    
    class bllInstrutor {

        public function Select (){
            $dal = new  \Dal\dalInstrutor(); 
           
            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new  \Dal\dalInstrutor(); 
           
            return $dal->SelectID($id);
        }

        public function SelectNome(string $nome){
            $dalInstrutor = new dalInstrutor(); 

            return $dalInstrutor->SelectNome($nome);
        }

        public function Insert (\MODEL\Instrutor $instrutor){
           $dal = new \DAL\dalInstrutor(); 

           $dal->Insert($instrutor); 
        }

        public function Update (\MODEL\Instrutor $instrutor){
           $dal = new \DAL\dalInstrutor(); 

           $dal->Update($instrutor);
        }

        public function Delete (int $id){
            $dal = new \DAL\dalInstrutor(); 
 
            $dal->Delete($id);
        }
    }
?>