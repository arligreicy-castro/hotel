<?php
	class inicioController
	{
       public function __construct(){}
        
        public function inicio()
		{
            require_once "model/composite/a.class.php";
            require_once "model/composite/li.class.php";
            require_once "model/composite/ul.class.php";
            require_once "model/composite/nav.class.php";

            $a1 = new A (texto:"Quartos", href:"index.php?controller=quarto&method=cadastrar");
            $a2 = new A (texto:"Lista Reservas", href:"index.php?controller=reserva&method=gerar_Pdf");
            $a3 = new A (texto:"Mostrar Reservas por mês", href:"index.php?controller=reserva&method=GraficoB");

            $li1 = new Li();
            $li1->setElementos($a1);

            $li2 = new Li();
            $li2->setElementos($a2);

            $li3 = new Li();
            $li3->setElementos($a3);

            $ul = new Ul();
            $ul->setElementos($li1);
            $ul->setElementos($li2);
            $ul->setElementos($li3);

            $nav = new Nav();
            $nav->setElementos($ul);
            $nav->criar();
        }
    }
?>