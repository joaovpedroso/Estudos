<?php
	//dados para conexão com o banco
	/*$servidor = "10.1.1.254";
	$banco = "1234";
	$usuario = "1234";
	$senha = "1234";
	*/

	$servidor = "localhost";
	$banco = "1234";
	$usuario = "root";
	$senha = "";
	//conectar no banco mysqli
	$con = mysqli_connect($servidor,$usuario,$senha,$banco) 
	or die ("Não foi possível conectar ao servidor de banco de dados");
	
	//mudar a codificação dos dados do banco
	mysqli_set_charset ($con, "utf8");