<?php
    class reservaDAO
    {
        public function __construct(private $db = null)
        {
            $this->conexao = Conexao::getInstancia();
        }
        public function listar_reservas()
        {
            try
            {
                $sql = "SELECT * FROM reserva r INNER JOIN quarto q 
                ON(r.idquarto=q.idquarto) INNER JOIN hotel h 
                ON (q.idhotel=h.idhotel)";
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
        }// fim do listar
        public function buscar_dados()
        {
            try 
            {
                $sql = "SELECT COUNT(idreserva) 'qtd', CONCAT('0',MONTH(data_reserva),'-',YEAR(data_reserva)) 'data' 
                FROM reserva r WHERE YEAR(data_reserva) = '2024' 
                GROUP BY MONTH(data_reserva)";
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
        }//fim do buscar
    }//fim da classe

    
?>