<!DOCTYPE html>
<html>
<head>
	<title>Oomelete</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" 
	href="css/estilo.css">
	
	<link rel="stylesheet" type="text/css" 
	href="css/font-awesome.min.css">

	<script type="text/javascript"
	src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript"
	src="js/jquery.cycle2.min.js"></script>
</head>
<body>	
	<header>
		<a href="index.php" title="oomelete"
		class="logo">
			<img src="imagens/logo.png"
			alt="oomelete" title="oomelete">
		</a>

		<form name="form1" method="post"
		action="index.php?pg=busca">
			<input type="text" name="busca"
			placeholder="Palavra-chave"
			required>
			<button type="submit">
				<i class="fa fa-search"></i>
			</button>
		</form>

		<div class="clear"></div>

		<nav>
			<ul>
				<li>
					<a href="index.php">
					<i class="fa fa-home"></i> Home
					</a>
				</li>
				<li>
					<a href="index.php?pg=sobre">
					<i class="fa fa-check"></i>
					Sobre
					</a>
				</li>
				<li>
					<a href="index.php?pg=filmes">
					<i class="fa fa-film"></i> Filmes
					</a>
				</li>
				<li>
					<a href="index.php?pg=series">
					<i class="fa fa-video-camera"></i> Series
					</a>
				</li>
				<li>
					<a href="index.php?pg=games">
					<i class="fa fa-gamepad">
					</i> Games
					</a>
				</li>
				<li>
					<a href="index.php?pg=plugins">
					<i class="fa fa-plug">
					</i> Plugins
					</a>
				</li>
				<li>
					<a href="index.php?pg=contato">
					<i class="fa fa-envelope-o">
					</i> Contato
					</a>
				</li>
			</ul>
		</nav>
	</header>

	<main class="container">
	<?php
		//incluir o arquivo do array
		include "array.php";

		//conteudo array - print_r
		//echo "<pre>";
		//print_r($series);

		//verificar se esta enviando uma variavel pg por $_GET
		if (isset($_GET["pg"])) {
			//recuperar a variavel
			$pg = trim($_GET["pg"]);
		} else {
			$pg = "home";
		}

		//echo $pg;
		$pg = "$pg.php";
		//verificar se a página existe
		if (file_exists($pg))
		{
			include $pg;
		} else {
			include "erro.php";
		}
	?>
	</main>

	<footer>
		<div class="top">
			<div class="container">
				<div class="coluna1">
					Facebook
				</div>
				<div class="coluna2 center">
					<p>Siga-nos:</p>
					<p>
					<a href="https://www.facebook.com/renato.batistamendes.1?fref=ts">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="http://www.twitter.com">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="http://www.instagram.com">
						<i class="fa fa-instagram"></i>
					</a>
					</p>
				</div>
			</div>

		</div>
		<div class="bottom">
			<div class="container">
				<p>oomelete - todos os direitos reservados</p>
				<img src="imagens/logo.png" alt="oomelete">
			</div>
		</div>
	</footer>
</body>
</html>