<!DOCTYPE html>
<html>
<head>
	<title>Faculdade ALFA</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		//incluir o arquivo de conexão com o banco
		include "conecta.php";
	?>

	<div class="container">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"><img src="imagens/logo.png"></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="menu">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="index.php">Página Inicial</a></li>

		        <?php
		        	//selecionar os tipos de curso
		        	$sql = "select * from tipo 
		        		order by tipo";
		        	//executar o comando
		        	$result = mysqli_query($con,$sql);


		        	while ($dados = mysqli_fetch_array($result)) {
		        		//separar os dados
		        		$id = $dados["id"];
		        		$tipo = $dados["tipo"];

		        		echo "<li><a href='index.php?pg=cursos&id=$id'>
		        		$tipo</a></li>";

		        	}


		        ?>

		        <li><a href="index.php?pg=contato">Contato</a></li>
		      </ul>
		      
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<?php
			//por padrão o $pg será home
			$pg = "home";
			//se estiver passando um pg por $_GET
			if (isset($_GET["pg"])) {
				$pg = trim($_GET["pg"]);
			}
			//adicionar o .php no $pg
			$pg = "$pg.php";
			//verifico se a página existe
			if (file_exists($pg)) {
				//insiro a página
				include $pg;
			} else {
				//se nao existe
				include "erro.php";
			}

		?>

	</div>

</body>
</html>