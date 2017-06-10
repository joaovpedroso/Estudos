<div class="cycle-slideshow">
	<img src="imagens/b1.jpg" title="GoT" alt="GoT">
	<img src="imagens/b2.jpg" title="Bagulhos Estranhos" alt="Bagulhos Estranhos">
</div>

<h1>Séries</h1>
<?php
	$i = 0;
	foreach ($series as $s) {
		$i++;
		if ($i > 4) break;

		echo "<div class='coluna center'>
				<h2>$s[nome]</h2>
				<img src='imagens/$s[foto]'>
				<p>
				<a href='index.php?pg=detalhes&id=$s[id]&tipo=series'>
						Detalhes
					</a>
				</p>
			</div>";
	}

?>

<h1>Filmes</h1>
<?php
	$x = 0;
	//mostrar os dados do array $filmes
	foreach ($filmes as $f) {
		//somar mais 1
		$x++;
		//verificar se $x é maior que 4
		if ($x > 4) break;

		//separar os dados
		$id = $f["id"];
		$nome = $f["nome"];
		$foto = $f["foto"];
		$descricao = $f["descricao"];

		echo "<div class='coluna center'>
			<h2>$nome</h2>
			<img src='imagens/$foto'>
			<p>
				<a href='index.php?pg=detalhes&id=$id&tipo=filmes'>
					Detalhes
				</a>
			</p>
		</div>";
	}
?>
<h1>Games</h1>
<?php
	$x = 0;
	//mostrar os dados do array $games
	foreach ($games as $g) {
		//somar mais 1
		$x++;
		//verificar se $x é maior que 4
		if ($x > 4) break;

		//separar os dados
		$id = $g["id"];
		$nome = $g["nome"];
		$foto = $g["foto"];
		$descricao = $g["descricao"];

		echo "<div class='coluna center'>
			<h2>$nome</h2>
			<img src='imagens/$foto'>
			<p>
				<a href='index.php?pg=detalhes&id=$id&tipo=games'>
					Detalhes
				</a>
			</p>
		</div>";
	}
?>