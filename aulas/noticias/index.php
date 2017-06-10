<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News & News</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/icone.png">
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
            <img src="imagens/icone2.ico" alt="News" title="News" width="35">
          </a>
        </div>

        <div class="collapse navbar-collapse" id="menu">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php?pg=home">Home</a></li>
            <li><a href="index.php?pg=noticias">Noticias</a></li>
            <li><a href="index.php?pg=contato">Contato</a></li>
          </ul> 
        </div>
      </div>
    </nav>
    
    <!-- BANNER -->
    <div id="banner" class="cycle-slideshow" data-cycle-slides="> img">
        <img src='imagens/b1.jpg' class='img' title='Banner1' alt='Banner1'>
        <img src='imagens/b2.jpg' class='img' title='Banner2' alt='Banner2'>
        <img src='imagens/b3.png' class='img' title='Banner3' alt='Banner3'>
    </div>


    <?php
      include "conecta.php";
    ?>


    <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <h2>Categorias</h2>
        <?php
          $sql = "select * from categoria order by categoria";
          $resultado = mysqli_query($con, $sql);
          while ($dados = mysqli_fetch_array($resultado)){
            
            $id = $dados["id"];
            $categoria = $dados["categoria"];

            echo "<div class='categorias'>
                <ul class='nav nav-pills nav-stacked'>
                  <li><a href='index.php?pg=noticias&id=$id'>$categoria</a></li>
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
            echo "<h3>Página Não Encontrada !</h3>";
          }
        ?>
      </div>
    </div>
  </div> 

  <footer class="text-center well rodape">
    <p>Desenvolvido por Joao Victor D. Pedroso</p>
  </footer>

  </body>
</html>