<?php
	$id = 0;

	if(isset($_GET["id"])){
		$id = trim($_GET["id"]);
	}

	$sql = "SELECT categoria FROM categoria WHERE id = ".(int)$id;
	$resultado = mysqli_query($con, $sql);
	$dados = mysqli_fetch_array($resultado);
	$pagina = $dados["categoria"];

	$sql = "SELECT * FROM produto WHERE categoria_id = ".(int)$id;
	$resultado = mysqli_query($con, $sql);
	

	echo "<div class='col-md-3 text-center'>
			<h1>$pagina</h1>
		</div>";
	while ($dados = mysqli_fetch_array($resultado)){
		$id = $dados["id"];
		$nome = $dados["nome"];
		$foto = $dados["foto"];

		echo "<div class='col-md-3 text-center'>
				<div class='margem'>
				 		<a href='index.php?pg=detalhes&id=$id'>
				 			<img class='thumbnail imagem' src='imagens/$foto' >
				 			<p>$nome</p>
				 		</a>
			 	</div>
			 </div>	";
	}

?>