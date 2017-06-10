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
	<div class="container">

		<?php include "conecta.php"; ?>

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
		        	$sql = "select * from tipo order by tipo";
		        	$result = mysqli_query($con,$sql);
		        	while ($dados = mysqli_fetch_array($result)) {
		        		echo "<li><a href='index.php?pg=cursos&id=$dados[id]'>$dados[tipo]</a></li>";
		        	}
		        ?>
		        <li><a href="index.php?pg=contato">Contato</a></li>
		      </ul>
		      
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<?php

			$pg = "home";

			if (isset($_GET["pg"])) $pg = trim($_GET["pg"]);

			$pg = "$pg.php";

			if (file_exists($pg)) include $pg;
			else include "erro.php";

		?>

	</div>

</body>
</html>