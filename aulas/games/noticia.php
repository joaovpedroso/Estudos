<?php
	include "topo.php";
	include "conecta.php";
	$id = $_GET["id"];

?>
<div class="container">
<?php
	$sql = "SELECT * FROM noticia WHERE id = ".(int)$id;
	$resultado = mysqli_query($con, $sql);
	
	while ($dados = mysqli_fetch_array($resultado)) {
		$id = $dados["id"];
		$titulo = $dados["titulo"];
		$resumo = $dados["resumo"];
		$texto = $dados["texto"];
		$jogo_id = $dados["jogo_id"];
		$foto = $dados["foto"];
		$data = $dados["data"];
		echo "<h1>$titulo</h1>

			<div class='noticias'>
				<img src='images/$foto' alt='$titulo' title='$titulo'>
			</div>
			<h3>Postado em: $data</h3>
			<p>$texto</p>";


	}
?>
</div>



<?php

		include "rodape.php";
?>