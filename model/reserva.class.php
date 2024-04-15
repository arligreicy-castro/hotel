<?php
    class Reserva
    {
        public function __construct(private int $idreserva = 0,
        private $idcliente = 0, private $idquarto = 0, 
        private date $data_reserva = "", private date $data_entreda = "",
        private date $data_saida = ""){}

        public function getIdreserva()
        {
            return $this->idreserva;
        }
        public function getData_reserva()
        {
            return $this->data_reserva;
        }
        public function getData_entreda()
        {
            return $this->data_entreda;
        }
        public function getData_saida()
        {
            return $this->data_saida;
        }
        //metodos set
        public function setIdreserva($idreserva)
        {
            $this->idreserva = $idreserva;
        }
        public function setData_reserva($data_reserva)
        {
            $this->data_reserva = $data_reserva;
        }
        public function setData_entreda($data_entreda)
        {
            $this->data_entreda = $data_entreda;
        }
        public function setData_saida($data_saida)
        {
            $this->data_saida = $data_saida;
        }
    }

?>