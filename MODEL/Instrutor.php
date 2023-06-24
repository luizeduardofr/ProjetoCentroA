<?php
    namespace MODEL;
    
    class Instrutor {
        private ?int $id;
        private ?string $nome;
        private ?string $cpf;
        private ?string $nascimento;

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

        public function getNome() 
        {
            return $this->nome;
        }

        public function setNome(string $nome) 
        {
            $this->nome = $nome;    
        }

        public function getCpf() 
        {
            return $this->cpf;
        }

        public function setCpf(string $cpf) 
        {
            $this->cpf = $cpf;    
        }

        public function getNascimento() 
        {
            return $this->nascimento;
        }

        public function setNascimento(string $nascimento) 
        {
            $this->nascimento = $nascimento;    
        }
    }
?>