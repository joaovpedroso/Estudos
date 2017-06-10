<!DOCTYPE html>
<html>
<head>
	<title>Formulário 1</title>
	<meta charset="utf8">
</head>
<body>
	<h1>Dados do Formulário 1</h1>
	<?php
		//mostrar o array do GET
		//print_r mostra dados de um array
		print_r($_GET);

		echo $_GET["nome"];
		echo "<p>Nome: $_GET[nome]</p>";
		echo "<p>E-mail: $_GET[email]</p>";

	?>
</body>
</html>