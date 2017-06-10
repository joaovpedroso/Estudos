<?php
	//iniciar a sessao
	session_start();

	if ( !isset( $_SESSION["admin"]["id"] ) ) {
		//direcionar para o index
		header( "Location: index.php" );
	}

	//incluir o arquivo para conectar no banco
	include "../config/conecta.php";

  //Funcao para formatar o valor
  function mudarvalor($valor ){

    // str_replace ( o que esta procurando, pelo que deseja trocar, de onde )
    $valor = str_replace( ".", "", $valor );
    $valor = str_replace( ",", ".", $valor );

    return $valor;
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vandersystem</title>
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
  	$(function () { 
      // Valodação dos campos
  		$("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); 

      // Colocar a mascara de Valor
      $('.valor').maskMoney( { thousands:'.', decimal:',' } );

  	} );
	</script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
   
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
      data-target="#menu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php">VanderSystem</a>
    </div>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="nav navbar-nav navbar-right">
      	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
            	<a href="categoria.php">
            	Categoria</a>
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
            	<a href="usuario.php">Usuário</a>
            </li>
          </ul>
        </li>
        <li>
        	<a href="sair.php">
        	Olá <?php echo $_SESSION["admin"]["login"];?>
        	- Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>







