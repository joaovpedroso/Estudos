<?php
	
	include "../config/conecta.php";

	$usuario = "geovani";
	$senha= "1234";
	$senha = md5($senha);

	$sql = "select * from usuario where login = ? limit 1";

	$consulta = $pdo->prepare($sql);
	$consulta->bindParam(1,$usuario);
	$consulta->execute();

	$dados = $consulta->fetch(PDO::FETCH_OBJ);
	echo $dados->nome;
	echo"<p>Senha $dados->senha</p>";
	echo "<p>Senha Digitada: $senha </p>";

	if ($senha == $dados->senha )
		echo "<p> As senhas são iguais </p>";
	else
		echo "<p>As senhas são diferentes</p>";
