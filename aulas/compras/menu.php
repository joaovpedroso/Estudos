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
                        </div>"  
          </div>
        </div>
    </div> <!--FIM MENU-->