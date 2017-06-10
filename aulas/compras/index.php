<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>JC Compras</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

  </head>
  <body>
    <?php
      include "conecta.php";
    ?>
   
     <!-- Menu Responsivo -->
    <div class="navbar-wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top ">
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

                      <a class="navbar-brand" href="index.php">
                        <img class="brand" src="imagens/logo1.png" alt="Carrinho de Compras" title="Carrinho de Compras">
                      </a>
                </div>

                <?php
                  $options="";
                  $sql = "SELECT * FROM categoria";
                  $resultado = mysqli_query($con, $sql);              

                  while($dados = mysqli_fetch_array($resultado)){
                    $id = $dados["id"];
                    $categoria = $dados["categoria"];
                    
                    $options .="<li id='li1'><a href='index.php?pg=pagina&id=$id'>$categoria</a></li>";
                    //Montando o menu com a seleçao no banco de dados
                   
                  }
                ?>   
               
                
                <div class='navbar-collapse collapse' id='navbar'>
                  <ul class='nav navbar-nav'>
                    <?=$options;?>
                   </ul>
                </div>  
             
              <div class="row">  
                <div class="navbar-form navbar-left">
                  <div class="form-group">  
                    <input type="text" name="busca" placeholder="O Que deseja buscar" class="form-control" style= "margin-top: 0.6em; margin-left: 12em;">
                  </div>
                  <button type="submit" class="btn btn-default" style="margin-top: 0.6em;">Pesquisar</button>  
                </div> 
              </div>  
             
                
                  
              
           
          </div>
        </div>
    </div> <!--FIM MENU-->


  <!--SLIDE de BANNERS -->
  <div id="banner" class="cycle-slideshow margem" data-cycle-slides="> img">
        <img src='imagens/b1.jpg' class='img' title='Banner1' alt='Banner1'>
        <img src='imagens/b2_editada.jpg' class='img' title='Banner2' alt='Banner2'>
        <img src='imagens/b3_editada.jpg' class='img' title='Celulares' alt='Celulares'>
  </div>   


   <!--CONFIGURACAO da VARIAVEL PG -->
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
 


  <!--RODAPÈ -->
  <div class="footer">
    <div class="navbar navbar-inverse navbar-fixed-bottom ">
      <h5 style="color: white; text-align: center">Direitos Reservador JC Compras -  Umuarama - PR</h5>
    </div>   
   </div>  

    
  </body>
</html>