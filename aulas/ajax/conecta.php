<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "ajax";

	$con = mysqli_connect($servidor, $usuario, $senha, $banco) or die(mysqli_error());
	
?>