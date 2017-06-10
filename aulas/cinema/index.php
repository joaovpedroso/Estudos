<!DOCTYPE html>
<html>
<head>
	<title>Cinemarka - Seu cinema de Alto Piquiri</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>


</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
		        	<span class="sr-only">Toggle navigation</span>
		        	<span class="icon-bar"></span>
		       	 	<span class="icon-bar"></span>
		       		<span class="icon-bar"></span>
		     	</button>
				<a class="navbar-brand" href="index.php">
					<img src="imagens/logo.svg" alt="Cinemark" title="Cinemark" width="120">
				</a>
			</div>

			<div class="collapse navbar-collapse" id="menu">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php?pg=empresa">Quem Somos</a></li>
					<li><a href="index.php?pg=filmes">Filmes</a></li>
					<li><a href="index.php?pg=contato">Contato</a></li>
				</ul>	
			</div>

		</div>
	</nav>

	<?php 
		//Incluindo arquivo de conexao com o banco de dados
		include "conecta.php";
	?>

	<!-- BANNER -->
	<div id="banner" class="cycle-slideshow" data-cycle-slides="> a">
	 	<?php
	 		//Buscar os Banner´s Cadastrados
	 		$sql = "select * from banner";
	 		//Executar o SQL e guardar o resultado
	 		$resultado = mysqli_query($con, $sql);
	 		//mysqli_query (CONEXAO, COMANDO SQL)

	 		while($dados = mysqli_fetch_array($resultado)) {
	 			//Separar os dados
	 			$titulo = $dados["titulo"];
	 			$imagem = $dados["imagem"];
	 			$filme = $dados["filme_id"];

	 			$imagem = "imagens/$imagem";

	 			//echo "$imagem <br>";
	 			//Tag para inserir a imagem na tela
	 			echo " <a href='index.php?pg=detalhes&id=$filme'> 
	 					<img src='$imagem' class='img' title='$titulo' alt='$titulo'>
	 				   </a>	";

	 		}
	 	?>
	</div>

	<!-- CONTEUDO PRINCIPAL -->
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3">
				<h2>Categorias</h2>
				<?php
					$sql = "select * from tipo order by tipo";
					$resultado = mysqli_query($con, $sql);
					while ($dados = mysqli_fetch_array($resultado)){
						
						$id = $dados["id"];
						$tipo = $dados["tipo"];

						echo "<div class='nav'>
								<ul class='nav nav-pills nav-stacked'>
									<li><a href='index.php?pg=filmes&id=$id'>$tipo</a></li>
								</ul>
							  </div>	
								";	
					}
				?>	
			</div>
			<div class="col-md-9 col-sm-9">
			  <?php
			  	//Configurar para abrir as paginas
			  	//Variavel PG
			  	$pg = "home";

			  	//Verificar se esta enviando PG por get
			  	if (isset($_GET["pg"])){
			  		$pg = trim($_GET["pg"]);
			  	}

			  	//Verificar se é o INDEX.PHP
			  	if ($pg == "index" ){
			  		$pg = "home";
			  	}


			  	//Incluir o .php no nome da pagina
			  	$pg = "$pg.php";

			  	//Verificar se a pagina existe
			  	if (file_exists($pg)){
			  		include $pg;
			  	}else {
			  		include "erro.php";
			  	}


			  ?>
			</div>
		</div>
	</div>

	<footer>
		<p class="text-center">Desenvolvido por Joao Victor D. Pedroso - Umuarama - PR </p>
	</footer>

</body>
</html>