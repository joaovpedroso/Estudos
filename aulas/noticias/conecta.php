<?php

$servidor = "localhost";
$usuario = "root" ;
$senha = "" ;
$banco = "noticias" ;


//Arquivo para conectar no banco de dados

	$con = mysqli_connect($servidor, $usuario, $senha, $banco
		) or die ("Erro ao conectar no banco de Dados");
	// mysqli_connect("SERVIDOR", "USUARIO", "SENHA", "BANCO DE DADOS");

	//Convertendo o que vem do banco em UTF8 - sem erros Cabulosos na escrita
	mysqli_set_charset($con, "utf8");

?>