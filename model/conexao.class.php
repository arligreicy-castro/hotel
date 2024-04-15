<?php
	class Conexao
	{
		private	static $db;
		private function __construct(){} // cria o construtor como private

		public static function getInstancia()
		{
			if(empty(self::$db))
			{
				$parametros = "mysql:host=localhost;dbname=hotel;charset=utf8mb4";
				try
				{
					self::$db = new PDO($parametros, "root", "");
				}
				catch(PDOException $e)
				{
					die("Problema de conexão com o banco de Dados");
				}
			}//fim do if
			return self::$db;
		} // fim do metodo getInstancia
	}//fim da classe
?>