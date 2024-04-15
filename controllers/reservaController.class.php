<?php
    require_once "model/conexao.class.php";
    require_once "dao/reservaDAO.class.php";

    class reservaController{
        public function __construct(private $conexao = null)
        {
            $this->conexao = Conexao::getInstancia();
        }
        public function gerar_Pdf()
        {
            $reservaDAO = new ReservaDAO($this->conexao);
            $reservas = $reservaDAO->listar_reservas();
            require_once "views/reserva_pdf.php";
        }
        public function GraficoB()
        {
            require_once "views/gerargrafico.php";
        }

        public function buscarDadosReservas()
        {
            $reservaDAO = new ReservaDAO($this->conexao);
            $reservas = $reservaDAO->buscar_dados();
            $reservas = json_encode($reservas);

            print_r($reservas);
        }
        
    }

?>