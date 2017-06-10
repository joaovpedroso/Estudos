
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Gerenciador Salao</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script type="text/javascript" src="js/jquery.maskedinput.js"></script>

    <script>
      jQuery(function($){
      //$("#campoData").mask("99/99/9999");
     // $("#telefone").mask("(99) 99999-9999");
      //$("#campoSenha").mask("***-****");
      //$("#rg").mask("99.999.999-9");
      //$("#cpf").mask("999.999.999-99");
      });

    </script>


  </head>
  <body>
    <?php
      include "conecta.php";
    ?>

      <!-- Menu Responsivo -->
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
                        <p>Gerenciador</p>
                      </a>
                </div>      

                <div class='navbar-collapse collapse menu' id='navbar'>
                  <ul class='nav navbar-nav'>
                    <li><a href='inicial.php?pg=clientes'><i class="glyphicon glyphicon-user"> Clientes</i></a></li> 
                    <li><a href='inicial.php?pg=produtos'><i class="glyphicon glyphicon-gift"> Produtos</i></a></li> 
                    <li><a href='inicial.php?pg=compras'><i class="glyphicon glyphicon-arrow-down"> Entradas</i></a></li>  
                    <li><a href='inicial.php?pg=vendas'><i class="glyphicon glyphicon-shopping-cart"> Vendas</i></a></li>  
                    <li><a href='inicial.php?pg=servicos'><i class="glyphicon glyphicon-scissors"> Servicos</i></a></li>  
                    <li><a href='inicial.php?pg=relatorios'><i class="glyphicon glyphicon-align-justify"> Relatorios</i></a></li> 
                    <li><a href='inicial.php?pg=usuarios'><i class="glyphicon glyphicon-eye-open"> Usuarios</i></a></li> 
                    <li><a href='logout.php'><i class="glyphicon glyphicon-off"> Sair</i></a></li>  
                  </ul>
                </div>             
          </div>
        </div>
    </div> <!--FIM MENU-->    

      <!--CONFIGURACAO da VARIAVEL PG -->
      <div class="col-md-9 col-sm-9">
        <?php
          //Configurar para abrir as paginas
          //Variavel PG
          $pg = "home";
          $pg = strtolower($pg);

          //Verificar se esta enviando PG por get
          if (isset($_GET["pg"])){
            $pg = trim ($_GET["pg"]);
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

  <!-- EDITAR O FOOTER -->
    <!-- <footer>Desenvolvido por Joao Victor D. Pedroso - Umuarama - PR</footer>  -->
  </body>
</html>