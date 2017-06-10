<?php
	
	$id = 0;

	if (isset($_GET["id"])){
		$id = trim($_GET["id"]);
	}

	$sql = "Select * from noticia where id = ".(int)$id;	
	$resultado = mysqli_query($con, $sql);
	$dados = mysqli_fetch_array($resultado);

	//Separar os resultados em variaveis
	$titulo = $dados["titulo"];
	$categoria = $dados["categoria_id"];
	$noticia = $dados["noticia"];
	$foto = $dados["foto"];

	if(empty($titulo)){
		echo "<br><div class='alert alert-danger text-center'> 
			   A noticia que esta tentando acessar 
			   pode não estar mais disponivel<br></br>
			   <a href='index.php'>Voltar a página inicial</a>
			  </div>";
	}


	$sql = "SELECT categoria FROM categoria WHERE id =".(int)$categoria;
	$resultado = mysqli_query($con, $sql);
	$dados = mysqli_fetch_array($resultado);

	$categoria_nome = $dados["categoria"];

?>
<div class="row">
	<div class="col-md-4">
		<img class="thumbnail img" src="imagens/<?php echo $foto; ?>">
	</div>
	<div class="col-md-8">
		<h3><strong><?=$titulo;?></h3></p>
		<p><?=$noticia;?></p>

		<p><strong>Categoria:</strong></p>
		<p><?=$categoria_nome;?></p>
	</div>
</div>