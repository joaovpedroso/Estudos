<?php
	try{
		$servidor = "localhost"; // url servidor
		$banco = "site"; // nome do  banco
		$usuario = "root"; // usuario do banco
		$senha = ""; // senha do banco
		$pdo = new PDO ("mysql:host=$servidor;dbname=$banco;charset=utf8","$usuario","$senha"); // dados PDO
		

		}catch (PDOExeption $e) {
			echo "Erro de Conexão " . $e->getMessage();
			exit;
		}

?>