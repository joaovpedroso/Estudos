<?php
  include "bloqueio.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="css/colorbox.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="js/jquery.colorbox-min.js"></script>
   

    
    <title>CONTROLE DE ENTRADA E SAIDA MENSAL</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

  </head>
  <body>
      <div class="navbar-wrapper">
        <div class="navbar navbar-static-top navbar-inverse">
          <div class="">
       
                <div class="navbar-header">
                    <!-- Criando Botao do Menu Quadradinho -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" 
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only"></span>
                    <!-- Listras Brancas no Quadradinho do Menu -->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>

                      <a class="navbar-brand" href="inicial.php">
                        <img src="img/controle.png" alt="Controle" title="Controle" class="brand-img">
                        <p>Controle</p>
                      </a>
                </div>      

                <div class='navbar-collapse collapse menu' id='navbar'>
                  <ul class='nav navbar-nav'>
                    <li><a href='inicial.php'><i class="glyphicon glyphicon-home"> Home</i></a></li>  
                    <li><a href='inicial.php?pg=entradas'><i class="glyphicon glyphicon-arrow-down"> Entradas</i></a></li>  
                    <li><a href='inicial.php?pg=saidas'><i class="glyphicon glyphicon-arrow-up"> Saidas</i></a></li> 
                    <li><a href='inicial.php?pg=usuarios'><i class="glyphicon glyphicon-user"> Usuarios</i></a></li> 
                    <li><a href='logout.php'><i class="glyphicon glyphicon-off"> Deslogar</i></a></li>  
                  </ul>
                </div>             
          </div>
        </div>
    </div> <!--FIM MENU-->   


    <div class="col-md-9 col-sm-9">
        <?php
          //Configurar para abrir as paginas
          //Variavel PG
          $pg = "home";
          $pg = strtolower($pg);

          //Verificar se esta enviando PG por get
          if (isset($_GET["pg"])){
            $pg = trim($_GET["pg"]);
          }

          //Verificar se é o INDEX.PHP
          if ($pg == "inicial" ){
            $pg = "home";
          }


          //Incluir o .php no nome da pagina
          $pg = "$pg.php";

          //Verificar se a pagina existe
          if (file_exists($pg)){
            include $pg;
          }else {
            echo "<div class='alert alert-danger text-center container'> 
                   A pagina que esta tentando acessar 
                   pode não estar disponivel <br></br>
                   <a href='inicial.php'>
                    Voltar a página inicial
                   </a>
                </div>";
          }
        ?>
      </div>  




    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>