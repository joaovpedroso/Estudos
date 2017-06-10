<!DOCTYPE html>
<html>
<head>
	<title>Games</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Abel|Muli" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
</head>
<body>
	<?php
		//incluir o arquivo do banco de dados
		include "conecta.php";
	?>
	<header>
		<a href="index.php" title="Página Inicial" id="logo">GAME</a>

		<nav>
			<ul>
				<?php
				//selecionar todas as categorias
				$sql = "select * from plataforma order 	by nome";
				//executar o sql
				$resultado = mysqli_query($con,$sql);

				while ($dados = mysqli_fetch_array($resultado)) {
					//separar os dados
					$id = $dados["id"];
					$nome = $dados["nome"];
					//mostrar o link
					echo "<li>
					<a href='plataforma.php?id=$id'>
					$nome</a>
					</li>";
				}
				?>
			</ul>
		</nav>
	</header>