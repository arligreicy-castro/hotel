<?php
    class tipoDAO
    {
        public function __construct(private $db = null)
        {
            $this->conexao = Conexao::getInstancia();
        }
        public function listar_tipos()
        {
            try 
            {
                $sql = "SELECT * FROM tipo";
                $stm = $this->db->prepare($sql);
                $stm->execute();
                $this->db = null;

                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch(PDOException $e)
            {
                echo $e->getCode();
                echo $e->getMessage();
                echo "Erro na conexão";
            }
        }
    }//fim da classe
?>