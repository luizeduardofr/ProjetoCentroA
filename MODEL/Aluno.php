<?php
    namespace MODEL;
    
    class Aluno {
        private ?int $id;
        private ?string $nome;
        private ?string $cpf;
        private ?string $nascimento;
        private ?string $endereco;

        public function __construct(?int $id, ?string $nome, ?string $cpf, ?string $nascimento, ?string $endereco)
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->nascimento = $nascimento;
            $this->endereco = $endereco;
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

        public function getEndereco() 
        {
            return $this->endereco;
        }

        public function setEndereco(string $endereco) 
        {
            $this->endereco = $endereco;    
        }
    }
?>