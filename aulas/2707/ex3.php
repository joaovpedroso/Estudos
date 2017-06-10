<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>GET</h1>
	<?php

		//mostrar o array do $_GET
		print_r($_GET);

		//verificar se a variavel existe
		if (isset($_GET["nome"])) {
			//mostrar o nome
			echo "<p>Nome: $_GET[nome]
			</p>";
		}
		if (isset($_GET["cidade"])) {
			echo "<p>Cidade: $_GET[cidade]
			</p>";
		}

	?>	
</body>
</html>