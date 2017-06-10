<!DOCTYPE html>
<html lang="pt-br">
  <?php 
    include "includ/cabecalho.html";
  ?>
  <body>

    <!-- MENU -->
    <div class="navbar-wrapper">
      <div class="navbar navbar-static-top">
        <div class="navbar-header">
          <!-- Criando Botao do Menu Quadradinho -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar span"></span>
            <span class="icon-bar span"></span>
            <span class="icon-bar span"></span>
          </button>
          <a class="navbar-brand" href="index.php">
          <img src="img/logoEdt.png" alt="News Online" title="News Online" class="brand-img img-responsive" width="50em" style="margin-top: -0.7em">
          </a>
        </div>      
        <div class='navbar-collapse collapse menu' id='navbar'>
          <ul class='nav navbar-nav' id="nav-mobile">
            <li><a href='index.php'>Home</i></a></li> 
            <li><a href='#publicacoes'>Publicações</i></a></li>  
            <li><a href='#galeria'>Galeria Online</i></a></li>    
            <li><a href='#contato'>Contato</i></a></li>  
          </ul>
        </div> 
      </div>
    </div> <!--FIM MENU-->

  <div class="conteudo"><!-- ABRE A DIV DO SITE TODO MENOS MENU E RODAPE -->
    <!--BANNER PAGINA -->
    <div id="banner" class="cycle-slideshow banner" data-cycle-fx=scrollHorz data-cycle-timeout=3000>
      <img src="img/b1.jpg" class="img-responsive" alt="" title="">
      <img src="img/b2.jpg" class="img-responsive" alt="" title="">
      <img src="img/b3.jpg" class="img-responsive" alt="" title="">
      <img src="img/b4.png" class="img-responsive" alt="" title="">
    </div>
    <!-- FIM DO BANNER -->

    <!-- AQUI VAI O CONTEUDO CARREGADO DO BANCO QUE SERA ADICIONADO VIA PAINEL-->
    
    <!--CONTEUDO DE PUBLICACOES -->
    <div class="well" id="publicacoes" style="width: 90%; float: left; margin-left: 4.5%; margin-right: 4.5%;">
      <h3>Publicacoes:</h3>
        <?php
          include "config/conecta.php";

          $sql = "SELECT * FROM publicacoes WHERE status = 1 ORDER BY id desc limit 3";
          $consulta = $pdo->prepare($sql);
          $consulta->execute();
          while($dados = $consulta->fetch(PDO::FETCH_OBJ)){
              $id = $dados->id;
              $titulo = $dados->titulo;
              echo "<div class='col-sm-3 publicacoes link' style='padding: 2%;'>
                      <a href='publicacoes.php&id=$id'>  
                        <div class='row'>
                          <h4 style='text-align:center;'><b>".$dados->titulo."</b></h4>
                        </div>

                        <div class='row' style='text-align: center; margin: 1em;'>
                          <img src='img/".$dados->capa."' alt='$titulo' title='$titulo' class='img-responsive thumbnail'>
                        </div>

                        <div class='row' style='text-align: center;'>  
                          <p>".$dados->subtitulo."</p>
                        </div>
                      </a>
                    </div>";
          }
        ?>
    </div>
    

    <!--GALERIAS -->
    <div class="well"  id="galeria" style="width: 90%; float: left; margin-left: 4.5%; margin-right: 4.5%;">
      <h3>Galerias:</h3>
      <div class="row link">
        <?php
          include "config/conecta.php";
          
          $sql = "SELECT * FROM galeria ORDER BY id DESC LIMIT 4";
          $consulta = $pdo->prepare($sql);
          $consulta->execute();

          while( $dados = $consulta->fetch(PDO::FETCH_OBJ) ){
            $id = $dados->id;
            $titulo = $dados->titulo;
            $capa = $dados->capa;
            echo "<a href='galeria.php&id=$id'>
                    <div class='col-md-3'>
                      <div class='row'>
                        <h4 style='text-align:center;'><b>".$titulo."</b></h4>
                      </div>
                      <div class='row' style='text-align: center; margin: 1em;'>
                        <img src='img/".$capa."' alt='$titulo' title='$titulo' class='img-responsive thumbnail'>
                      </div>
                    </div>
                  </a>";      
          }
        ?>
      </div>
    </div>  

    <!-- AREA PARA CONTATO -->
    <div class="well"  id="contato" style="width: 90%; float: left; margin-left: 4.5%; margin-right: 4.5%;">
      <h3>Contato:</h3>
    </div>  

  </div><!-- FECHA A DIV CONTEUDO -->  
    <?php 
      include "includ/rodape.html";
    ?>
  </body>
</html>

<!--

<div class="col-md-3">
          
</div>

-->