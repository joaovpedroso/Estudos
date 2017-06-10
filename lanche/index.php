<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo.png">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/estilo.css">
    <title>Finissimos Lanches</title>
    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- Menu Responsivo -->
  <div class="navbar-wrapper">
    <div class="navbar navbar-static-top">
      <div class="navbar-header">
        <!-- Criando Botao do Menu Quadradinho -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar cinza"></span>
          <span class="icon-bar cinza"></span>
          <span class="icon-bar cinza"></span>
        </button>
        <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" alt="Finissimos Lanches" title="Finissimos Lanches" class="brand-img" width="35em" style="margin-top: -0.7em">
        </a>
      </div>      
      <div class='navbar-collapse collapse menu' id='navbar'>
        <ul class='nav navbar-nav' id="nav-mobile">
          <li><a href='home'>Home</i></a></li> 
          <li><a href='oFinissimo'>O Finissimo</i></a></li> 
          <li><a href='cardapio'>Cardapio</i></a></li>  
          <li><a href='pedido'>Pedido Online</i></a></li>    
          <li><a href='contato'>Contato</i></a></li>  
        </ul>
      </div> 
    </div>
  </div> <!--FIM MENU-->   

  <div id="conteudo">
    <div id="content">

    </div>
  </div> 
  <script type="text/javascript" src="js/content.js"></script>

  <!-- RODAPÈ -->
  <div class="well rodape">
    <div class="row">
      <div class="col-md-8 texto">
        <div class="col-md-4">
          <a href="index.php">
            <img src="img/logo.png" alt="Finissimos Lanches" title="Finissimos Lanches" width="90em">
          </a>
        </div>
        <div class="col-md-4 contato">
          <p>Contato<br>
            <i class="glyphicon glyphicon-envelope"></i> | contato@finissimoslanches.com.br<br>
            <i class="glyphicon glyphicon-phone-alt"></i> | (44) 3624 - 7573
          </p>
        </div>
        <div class="col-md-4">
          <h3 style="font-weight: bold;">
          Finissimos Lanches
          </h3> 
            Av. Paraná, 3756<br>
            Próx. Cassino Royal
        </div>    
      </div>
    </div>
    <hr class="hr">
    <p>
      Desenvolvido Por <a href="https://www.facebook.com/people/Joao-Victor-Pedroso/100009930734487">Joao Victor Danieli Pedroso</a> -
      Umuarama - PR
    </p>  
  </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>