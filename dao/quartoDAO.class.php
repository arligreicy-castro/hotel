<?php
    class quartoDAO
    {
        public function __construct(private $db = null)
        {
            $this->conexao = Conexao::getInstancia();  
        }

        public function cadastrar($quarto)
        {
           try
           {
            $sql = "INSERT INTO quarto (numero, andar, idtipo, idhotel) values(?,?,?,?)";
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1,$quarto->getNumero());
                $stm->bindValue(2,$quarto->getAndar());
                $stm->bindValue(3,$quarto->getTipo()->getIdtipo());
                $stm->bindValue(4,$quarto->getHotel()->getIdhotel());
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