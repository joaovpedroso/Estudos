<?php
	include "conecta.php";
	include "topo.php";
	$plataforma_id = $_GET["plataforma_id"];
	$jogo_id = $_GET["jogo_id"];
?>


<div class="container">
<?php	

	$sql = "SELECT * FROM jogo WHERE id =".(int)$jogo_id;
	$resultado = mysqli_query($con, $sql);
	while($dados = mysqli_fetch_array($resultado)){
		$id = $dados["id"];
		$nome = $dados["nome"];
		$categoria_id = $dados["categoria_id"];
		$descricao = $dados["descricao"];

		$sql_foto_plataforma = "SELECT plataforma_id,foto FROM plataforma_jogo WHERE jogo_id = $id";
		$resultado_foto_plataforma = mysqli_query($con, $sql_foto_plataforma);
		$dados_foto_plataforma = mysqli_fetch_array($resultado_foto_plataforma);
			$id_plataforma = $dados_foto_plataforma["plataforma_id"];
			$foto_plataforma = $dados_foto_plataforma["foto"];

		$sql_categoria = "SELECT nome FROM categoria WHERE id = $categoria_id";
		$resultado_categoria = mysqli_query($con, $sql_categoria);
		$dados_categoria = mysqli_fetch_array($resultado_categoria);
			$categoria = $dados_categoria["nome"];


		echo "<h1>$nome</h1>
			<div class='jogos'>
				<img src='images/$foto_plataforma' alt='$foto_plataforma' title='$foto_plataforma'>
			</div>
				<h3 class='titulos'>Descricao do Jogo: </h3><br>
				<h2 class='contitulos'>Plataforma: $id_plataforma</h2><br>
				<h2 class='contitulos'>Categoria: $categoria</h2><br>
				<h2 class='contitulos'>Descricao do Jogo:</h2>
				<p class='pp'>$descricao</p><br>
				<h3 class='titulos'>Fotos do Jogo: </h3><br>";

		$sql_fotos = "SELECT foto, descricao FROM foto WHERE jogo_id = $id";
		$resultado_fotos = mysqli_query($con, $sql_fotos);
		while($dados_fotos = mysqli_fetch_array($resultado_fotos)){
			$foto = $dados_fotos["foto"];
			$descricao_foto = $dados_fotos["descricao"];
			echo "<img src='images/$foto' class='imgs' alt='$descricao_foto' title='$descricao_foto' >";
		}



		


		/*echo "ID do JOGO == $id<br>
			  Nome do Jogo == $nome<br>
			  Categoria do Jogo == <br>
			  Plataforma do Jogo == $plataforma<br>
			  Fotos do Jogo == 
			  Descricao da foto ";	
		*/		  

	}
?>

</div>


<?php
		include "rodape.php";
?>