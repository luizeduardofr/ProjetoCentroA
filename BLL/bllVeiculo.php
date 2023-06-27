<?php
    namespace BLL; 
    use DAL\dalVeiculo; 
    include_once '../../DAL/dalVeiculo.php';
    
    class bllVeiculo {

        public function Select (){
            $dal = new  \Dal\dalVeiculo(); 
           
            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new  \Dal\dalVeiculo(); 
           
            return $dal->SelectID($id);
        }

        public function SelectMarca (string $marca){
            $dal = new  \Dal\dalVeiculo(); 
           
            return $dal->SelectMarca($marca);
        }

        public function Insert (\MODEL\Veiculo $veiculo){
           $dal = new \DAL\dalVeiculo(); 

           $dal->Insert($veiculo); 
        }

        public function Update (\MODEL\Veiculo $veiculo){
           $dal = new \DAL\dalVeiculo(); 

           $dal->Update($veiculo);
        }

        public function Delete (int $id){
            $dal = new \DAL\dalVeiculo(); 
 
            $dal->Delete($id);
        }
    }
?>