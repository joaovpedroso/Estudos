<?php 
	

	//Recuperar o ID do filme enviado por GET
	$id = 0;
	//Verifica se a variavel Existe
	if (isset($_GET["id"])){
		$id = trim($_GET["id"]);
	}

	//Selecionar o filme do ID
	$sql = "Select * from filme where id = ".(int)$id;

	//Executar e guardar o resultado
	$resultado = mysqli_query($con, $sql);
	
	//Separar os resultados
	$dados = mysqli_fetch_array($resultado);

	$titulo = $dados["titulo"];
	$original = $dados["original"];
	$ano = $dados["ano"];
	$elenco = $dados["elenco"];
	$imagem = $dados["imagem"];
	$sinopse = $dados["sinopse"];
	$tipo = $dados["tipo_id"];

	$sql = " SELECT tipo FROM tipo WHERE id = ".$tipo ;
	$resultado = mysqli_query($con, $sql);
	$dados = mysqli_fetch_array($resultado);
	$nome_tipo = $dados["tipo"];



	//echo "<h1>$titulo</h1>";

	$titulo = strtoupper($titulo);

	if (empty($titulo)){
		Echo "<h1>Filme não encontrado </h1>
			  <div class='alert alert-danger'> 
				O Filme que está tentando acessar nao existe. <br>
				<a href='index.php'>Ir para a página inicial</a>
			  </div>";
	}
?>
<h1><?php echo $titulo; ?> </h1>
<div class="row">
	<div class="col-md-4">
		<img src="imagens/<?php echo $imagem; ?>">
	</div>
	<div class="col-md-8">
		<p><strong>Sinopse do Filme:</strong></p>
		<p><?=$sinopse;?></p>

		<p><strong>Nome Original:</strong></p>
		<p><?=$original;?></p>

		<p><strong>Ano de Produção:</strong></p>
		<p><?=$ano;?></p>

		<p><strong>Elenco:</strong></p>
		<p><?=$elenco;?></p>

		<p><strong>Categoria de Filme:</strong></p>
		<p><?=$nome_tipo;?></p>
	</div>
</div>