<?php

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "faculdade";

	$con = mysqli_connect($servidor,
			$usuario,
			$senha,
			$banco) or die("Não conectou!");

	mysqli_set_charset($con, "utf8");

