<?php
        require_once "tela.class.php";

    class Nav implements Componentes
    {
        public function __construct(
            private array $elementos = array()
        ){}

        public function getElementos(): array
        {
            return $this->elementos;
        }

        public function setElementos($elementos)
        {
            $this->elementos[] = $elementos;
        }

        public function criar()
        {
            echo "<nav>";
                foreach ($this->elementos as $elemento)
                {
                    $elemento->criar();
                }
            echo "</nav>";
        }

    }
?>