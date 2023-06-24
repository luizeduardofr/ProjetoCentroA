<?php
    namespace BLL; 
    use DAL\dalUsuario; 
    include_once '../MODEL/Usuario.php';
    
    class bllUsuario {
   
        public function SelectUser (string $usuario){
            $dal = new  \Dal\dalUsuario(); 

            return $dal->SelectUser($usuario);
        }
    }