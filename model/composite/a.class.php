<?php
    require_once "tela.class.php";

    class A implements Componentes
    {
        public function __construct(private string $texto = "", private string $href = ""
        ){}

        public function getTexto(): string
        {
            return $this->texto;
        }

        public function setTexto($texto)
        {
            $this->texto = $texto;
        }

        public function getHref()
        {
            return $this->href;
        }

        public function setHref($href)
        {
            $this->href = $href;
        }

        public function criar(){
            echo "<a href='{$this->href}'>{$this->texto}</a>";
        }
    }
?>