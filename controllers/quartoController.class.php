<?php
    require_once "model/conexao.class.php";
    require_once "model/hotel.class.php";
    require_once "model/quarto.class.php";
    require_once "model/tipo.class.php";
    require_once "dao/quartoDAO.class.php";
    require_once "dao/hotelDAO.class.php";
    require_once "dao/tipoDAO.class.php";
	class quartoController
	{
        public function __construct(private $conexao = null)
        {
            $this->conexao = Conexao::getInstancia();
        }
		public function cadastrar()
		{  
            $e = false;
            $msg = array("", "", "", "");

            $tipoDAO = new TipoDAO($this->conexao);
            $tipos = $tipoDAO->listar_tipos();

            $hotelDAO = new HotelDAO($this->conexao);
            $hoteis = $hotelDAO->listar_hoteis();

            if($_POST)
            {
                if(empty($_POST["numero"]))
                {
                    $msg[0] = "Preencha o número do quarto";
                    $e = true;
                }
                if(empty ($_POST["andar"]))
                {
                    $msg[1] = "Preencha o andar do quarto";
                    $e = true;
                }
                if(empty ($_POST["tipo"]))
                {
                    $msg[2] = "Selecione o tipo de quarto";
                    $e = true;
                }
                if(empty ($_POST["hotel"]))
                {
                    $msg[3] = "Selecione o hotel";
                    $e = true;
                }
                if(!$e)
                {
                    //inserir no BD
                    $tipo = new Tipo(idtipo:$_POST['tipo']);
                    $hotel = new Hotel(idhotel:$_POST['hotel']);
                    $quarto = new Quarto(numero:$_POST['numero'], 
                    andar:$_POST['andar'], tipo:$tipo, hotel:$hotel);
                    $quartoDAO = new QuartoDAO($this->conexao);
                    $quartoDAO->cadastrar($quarto);
                    header("location:index.php?controller=inicio&method=inicio");
                    die();
                }
            }

            //mostrar um formulario para o usuario criar o quarto
            require_once "views/form_quarto.php";
		}
        
	}//fim da classe
?>