<?php
	//criar a conexao com o bd
	try {
		//configuracoes
		$servidor = "10.1.1.254";
		$usuario = "1234";
		$senha = "1234";
		$banco = "1234";
		//conexao
		$con = new PDO ( "mysql:host=$servidor;
			dbname=$banco;
			charset=utf8",
			$usuario,
			$senha );

		//codificacao utf8
		//$con->exec("SET NAMES utf8");

	} catch (PDOException $e) {
		//mostrar erro na tela
		echo "Erro: " . $e->getMessage();
	}
