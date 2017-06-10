<?php
	//incluir o tipo
	include "topo.php";
?>

<div class="cycle-slideshow">
	<img src="images/b1.jpg" alt="Banner 1">
	<img src="images/b2.jpg" alt="Banner 2">
	<img src="images/b3.jpg" alt="Banner 3">
</div>
<div class="container">
	<h1>Notícias</h1>
	<?php
	//selecionar 3 ultimas noticias do banco
	$sql = "select id,titulo,resumo,foto from noticia order by data desc limit 3";
	$resultado = mysqli_query($con,$sql);
	while ($dados=mysqli_fetch_array($resultado))
	{
		//separar os dados
		$id = $dados["id"];
		$titulo = $dados["titulo"];
		$resumo = $dados["resumo"];
		$foto = $dados["foto"];

		echo "<div class='noticias'>
			<a href='noticia.php?id=$id'>
				<img src='images/$foto'>
				<h2>$titulo</h2>
				<p>$resumo</p>
			</a>
		</div>";
	}

	?>
	<div class="clearfix"></div>
	<a href='index.php?pg=jogos'><h1>Jogos</h1></a>
	<?php
	//selecionar 4 jogos aleatoriamente
	$sql = "select * from plataforma_jogo
	order by rand() limit 4";
	$resultado = mysqli_query($con,$sql);
	while ($dados=mysqli_fetch_array($resultado)){
		//recuperar os dados
		$foto = $dados["foto"];
		$plataforma_id = $dados["plataforma_id"];
		$jogo_id = $dados["jogo_id"];

		$sql2 = "select nome from jogo 
		where id = ".(int)$jogo_id." limit 1";
		$resultado2 = mysqli_query($con,$sql2);
		$dados2 = mysqli_fetch_array($resultado2);

		$nome = $dados2["nome"];

		echo "<div class='jogos'>
			<a href='jogo.php?plataforma_id=$plataforma_id&jogo_id=$jogo_id'>
				<img src='images/$foto'>
				<p>$nome</p>
			</a>
		</div>";

	}
	?>
</div>
<div class="clearfix"></div>
<?php
	//incluir o rodape
	include "rodape.php";
?>