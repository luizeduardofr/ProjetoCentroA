<?php

    namespace BLL;
    use DAL\dalAula;
    include_once '../../DAL/dalAula.php';

    class bllAula
    {
    
        public function Select()
        {
            $dal = new  \Dal\dalAula();

            return $dal->Select();
        }

        public function Insert(\MODEL\Aula $aula)
        {
            $dal = new \DAL\dalAula();

            $dal->Insert($aula);
        }

        public function Update (\MODEL\Aula $aula){
            $dal = new \DAL\dalAula(); 

            $dal->Update($aula);
        }

        public function Delete (int $id){
            $dal = new \DAL\dalAula(); 

            $dal->Delete($id);
        }
    }
?>