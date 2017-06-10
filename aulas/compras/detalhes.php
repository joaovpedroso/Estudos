<?php
	$id = 0;

	if(isset($_GET["id"])){
		$id = trim($_GET["id"]);
	}

	$sql = "SELECT * FROM produto WHERE id = ".(int)$id;
	$resultado = mysqli_query($con, $sql);
	$dados = mysqli_fetch_array($resultado);

	$nome = $dados["nome"];
	$categoria = $dados["categoria_id"];
	$descricao = $dados["descricao"];
	$foto = $dados["foto"];

	if(empty($nome)){
		echo "<br></br><br></br>
			<div class='alert alert-danger text-center container'> 
			   O produto que esta tentando acessar 
			   pode não estar mais disponivel na loja<br></br>
			   <a href='index.php'>
			   	Voltar a página inicial
			   </a>
			</div>";
	}

	$sql = "SELECT categoria FROM categoria WHERE id =".(int)$categoria;
	$resultado = mysqli_query($con, $sql);
	$dados = mysqli_fetch_array($resultado);

	$categoria_nome = $dados["categoria"];

?>

	<div class="row margem">
	<div class="col-md-4">
		<img class="thumbnail imagem" src="imagens/<?php echo $foto; ?>">
	</div>
	<div class="col-md-8">
		<h3><strong><?=$nome;?></h3></p>
		<p><?=$descricao;?></p>

		<p><strong class="valor">Valor:</strong></p>
		<p class="valor">Consulte-nos</p>

		<p><strong>Categoria:</strong></p>
		<p><?=$categoria_nome;?></p>

	</div>
</div>