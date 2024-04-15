<?php
    class Hotel
    {
        public function __construct(private int $idhotel = 0,
        private string $nome = "", private string $logradouro = "", 
        private string $numero = "", private string $pais = "",
        private string $telefone= ""){}

        public function getIdhotel()
        {
            return $this->idhotel;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function getLogradouro()
        {
            return $this->logradouro;
        }
        public function getNumero()
        {
            return $this->numero;
        }
        public function getPais()
        {
            return $this->pais;
        }
        public function getTelefone()
        {
            return $this->telefone;
        }
        
        public function setIdhotel($idhotel)
        {
        $this->idhotel = $idhotel;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;        
        }
        public function setLogradouro($logradouro)
        {
            $this->logradouro = $logradouro;   
        }
        public function setNumero($numero)
        {
            $this->numero = $numero;   
        }
        public function setPais($pais)
        {
            $this->pais = $pais;  
        }
        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }
    }
?>      