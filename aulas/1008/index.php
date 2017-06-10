<!DOCTYPE html>
<html>
<head>
	<title>Stranger Things</title>
	<meta charset="utf-8">
	<meta name="viewport" 
	content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div class="container">
	<header>
		<a href="index.php" title="Home">
			<img src="imagens/logo.png"
			alt="Stranger Things"
			title="Stranger Things">
		</a>

		<nav>
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="index.php?pg=sobre">Sobre o Seriado</a>
				</li>
				<li>
					<a href="index.php?pg=fotos">Fotos</a>
				</li>
				<li>
					<a href="index.php?pg=curiosidades">Curiosidades</a>
				</li>
				<li>
					<a href="index.php?pg=contato">
					Contato
					</a>
				</li>
			</ul>
		</nav>
	</header>

	<main>
	<?php
		
		//mostra o array $_GET
		//print_r($_GET);

		//verificar se o $_GET["pg"] existe
		if (isset($_GET["pg"])) {
			$pg = trim($_GET["pg"]);
		} else {
			$pg = "home";
		}

		//pagina que deseja inserir
		$pg = "$pg.php";
		
		//verificar se a pagina existe
		if (file_exists($pg)) {
			include $pg;
		} else {
			//se não existir incluir o erro
			include "erro.php";
		}
	?>
	</main>

	<footer>
		<p>Bagulhos Estranhos - Todos os direitos reservados<br>
		Desenvolvido por: Chimbinha Tidinha</p>
	</footer>
</div>
</body>
</html>