
<?php
	$usuario = "root";
	$senha = "";
	$servidor = "localhost";
	$banco = "salao";

	$con = mysqli_connect($servidor, $usuario, $senha, $banco) or die (
		"Erro ao conectar ao banco de dados".$banco);

	mysqli_set_charset($con, "utf8");
?>