<?php
    class Tipo
    {
        public function __construct(private int $idtipo = 0,
        private string $descritivo = "", private float $preco = 0.00){}

        public function getIdtipo()
        {
            return $this->idtipo;
        }
        public function getDescritivo()
        {
            return $this->descritivo;
        }
        public function getPreco()
        {
            return $this->preco;
        }
        public function setIdtipo(int $idtipo)
        {
            $this->idtipo = $idtipo;
        }
        public function setDescritivo(string $descritivo)
        {
            $this->descritivo = $descritivo;
        }
        public function setPreco($preco)
        {
            $this->preco = $preco;
        }
        
    }

?>