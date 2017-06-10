<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "compras";

	$con = mysqli_connect($servidor, $usuario, $senha, $banco
		) or die("Erro ao conectar no Banco de Dados ".$banco);

	mysqli_set_charset($con, "utf8");


?>