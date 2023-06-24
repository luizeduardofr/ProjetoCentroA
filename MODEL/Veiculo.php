<?php
    namespace MODEL;
    
    class Veiculo {
        private ?int $id;
        private ?string $marca;
        private ?string $modelo;
        private ?string $placa;

        public function __construct()
        {

        }

        public function getId() 
        {
            return $this->id;
        }

        public function setId(int $id) 
        {
            $this->id = $id;    
        }

        public function getMarca() 
        {
            return $this->marca;
        }

        public function setMarca(string $marca) 
        {
            $this->marca = $marca;
        }

        public function getModelo() 
        {
            return $this->modelo;
        }

        public function setModelo(string $modelo)
        {
            $this->modelo = $modelo;    
        }

        public function getPlaca() 
        {
            return $this->placa;
        }

        public function setPlaca(string $placa) 
        {
            $this->placa = $placa;    
        }
    }
?>