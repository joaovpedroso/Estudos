<h1>Filmes</h1>
<?php
	//mostrar os dados do array $filmes
	foreach ($filmes as $f) {
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