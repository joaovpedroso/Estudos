<?php
	//mostra o conteudo do array
	//variaveis que estao sendo enviadas por $_GET
	//$_GET - barra de endereços
	//print_r($_GET);

	//recuperar os dados
	$id = trim($_GET["id"]);
	$tipo = trim($_GET["tipo"]);

	//print_r($filmes[$id]);
	if ($tipo == "games") {
		//array de games
		$dados = $games[$id];
		echo "<h1>Detalhes do Game</h1>";
	} else if ($tipo == "series") {
		//array de séries
		$dados = $series[$id];
		echo "<h1>Detalhes da Série</h1>";
	} else {
		//array de filmes
		$dados = $filmes[$id];
		echo "<h1>Detalhes do Filme</h1>";
	}

	//separar os dados do registro
	$nome = $dados["nome"];
	$foto = $dados["foto"];
	$descricao = $dados["descricao"];

	echo "<h2>$nome</h2>
	<div class='coluna1'>
		<img src='imagens/$foto' alt='$nome'>
	</div>
	<div class='coluna2'>
		$descricao
	</div>";


