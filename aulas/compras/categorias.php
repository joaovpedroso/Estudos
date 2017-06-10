<?php
	$id = 0;

	if (isset($_GET["pg"])){
		$id = $_GET["pg"];
	}else{
		$sql = "SELECT * FROM produto";
		$resultado = mysqli_query($con, $sql);

		while ($dados = mysqli_fetch_array($resultado)) {
			$id = $dados["id"];
			$nome = $dados["nome"];
			$foto = $dados["foto"];

			echo "<div class='col-md-3 text-center espaco'>
 					<a href='index.php?pg=detalhes&id=$id'>
 						<img src='imagens/$foto' class='thumbnail img'>
 						<p>$titulo</p>
 					</a>
 				  </div>";

		}

	}

?>