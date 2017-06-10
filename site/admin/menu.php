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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/estiloAdmin.css">
    <script type="text/javascript" src="../js/jquery-2.2.4.min.js"></script>
    <script src="../js/jquery.cycle2.min.js"></script>
    <title>Painel de Administração | Sistema Site</title>
  </head>

<body>
    <!-- MENU -->
    <div class="navbar-wrapper">
      <div class="navbar navbar-top">
        <div class="navbar-header">
          <!-- Criando Botao do Menu Quadradinho -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar span"></span>
            <span class="icon-bar span"></span>
            <span class="icon-bar span"></span>
          </button>
          <a class="navbar-brand" href="home.php">
          <img src="../img/logoEdt.png" alt="News Online" title="News Online" class="brand-img img-responsive" width="50em" style="margin-top: -0.7em">
          </a>
        </div>      
        <div class='navbar-collapse collapse menu' id='navbar'>
          <ul class='nav navbar-nav navbar-right' id="nav-mobile">
            <li><a href='home.php' class="ativo">Home</i></a></li> 
            <li><a href='publicacoes.php'>Publicações</i></a></li>  
            <li><a href='galerias.php'>Galerias</i></a></li>  
            <li><a href=''>Usuarios</i></a></li>    
            <li><a href='logout.php'>Sair</i></a></li>  
          </ul>
        </div> 
      </div>
    </div> <!--FIM MENU-->
 
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>