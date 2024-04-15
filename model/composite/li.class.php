<?php
        require_once "tela.class.php";

    class Li implements Componentes
    {
        public function __construct(
            private array $elementos = array()
        ){}

        public function getElementos(): array
        {
            return $this->elementos;
        }

        public function setElementos($elemento)
        {
            $this->elementos[] = $elemento;
        }

        public function criar()
        {
            echo "<li>";
                foreach ($this->elementos as $elemento)
                {
                    $elemento->criar();
                }
            echo "</li>";
        }
    }

?>