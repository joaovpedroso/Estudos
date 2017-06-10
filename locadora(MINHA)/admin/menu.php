<?php
	session_start();

	if( !isset( $_SESSION["admin"] ["id"] ) ){
		//DIRECIONAR PARA O INDEX
		header( "Location: index.php" );
	}

	//INCLUIR O ARQUIVO PARA CONEXAO AO BANCO DE DADOS
	include "../config/conecta.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>LocaFilm</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" 
	href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" 
	href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" 
	href="../css/admin.css">

	<script type="text/javascript"
	src="../js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript"
	src="../js/bootstrap.min.js"></script>
	<script type="text/javascript"
	src="../js/bootstrap-inputmask.min.js"></script>
	<script type="text/javascript"
	src="../js/jqBootstrapValidation.js"></script>
	<script type="text/javascript"
	src="../js/jquery.maskMoney.min.js"></script>
	<script>
		$(function (){
			$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();	
		});
	</script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">

		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="home.php">LocaFilm</a>
		</div>
		<div class="collapse navbar-collapse" id="menu">
		  <ul class="nav navbar-nav navbar-right">
		  	<li class="dropdown">
		      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
		      <ul class="dropdown-menu">
		        <li>
		        	<a href="categoria.php">Categoria</a>
		        </li>
		        <li>
		        	<a href="classe.php">Classe</a>
		        </li>
		        <li>
		        	<a href="filme.php">Filme</a>
		        </li>
		        <li>
		        	<a href="cliente.php">Cliente</a>
		        </li>
		        <li>
		        	<a href="usuario.php">Usuario</a>
		        </li>
		      </ul>
		    </li>
		    <li>
		    	<a href="sair.php">
		    		Ola <?php echo $_SESSION["admin"] ["login"] ." - "; ?>Sair
		    	</a>
		    </li>
		  </ul>
		</div>

	</div>
</nav>        