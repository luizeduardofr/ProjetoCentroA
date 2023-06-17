<?php
    namespace MODEL;
    
    class Curso {
        private ?int $id;
        private ?string $letra;
        private ?float $valor;

        public function __construct(?int $id, ?string $letra, ?float $valor)
        {
            $this->id = $id;
            $this->letra = $letra;
            $this->valor = $valor;
        }

        public function getId() 
        {
            return $this->id;
        }

        public function setId(int $id) 
        {
            $this->id = $id;    
        }

        public function getLetra() 
        {
            return $this->letra;
        }

        public function setLetra(string $letra) 
        {
            $this->letra = $letra;    
        }

        public function getValor() 
        {
            return $this->valor;
        }

        public function setValor(float $valor) 
        {
            $this->valor = $valor;    
        }
    }
?>