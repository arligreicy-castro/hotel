<?php
    class Quarto
    {
        public function __construct(private int $idquarto = 0,
        private $tipo = null, private $hotel = null, private string $numero = "", private int $andar = 0){}

        public function getIdquarto()
        {
            return $this->idquarto;
        }
        public function getNumero()
        {
            return $this->numero;
        }
        public function getAndar()
        {
            return $this->andar;
        }
        public function getTipo()
        {
            return $this->tipo;
        }
        public function getHotel()
        {
            return $this->hotel;
        }
        //metodos set
        public function setIdquarto($idquarto)
        {
            $this->idquarto = $idquarto;
        }
        public function setNumero($numero)
        {
            $this->numero = $numero;
        }
        public function setAndar($andar)
        {
            $this->andar = $andar;
        }
        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }
        public function setHotel($hotel)
        {
            $this->hotel = $hotel;
        }
    }



?>