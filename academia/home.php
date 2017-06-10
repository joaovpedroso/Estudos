<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery.cycle2.min.js"></script>
<!-- BANNER -->
<div id="banner" class="cycle-slideshow" data-cycle-fx=scrollHorz data-cycle-timeout=8000>
  <img src="img/img01.jpg" alt="Musculacao, Muay Tay, Jiu-Jitsu, Cross Thai" title="Musculacao, Muay Tay, Jiu-Jitsu, 
  Cross Thai">
  <img src="img/img02.jpg" alt="Nova Impulse Fitness" title="Nova Impulse Fitness">
  <img src="img/img03.jpg" alt="Treine Duro Ou Continue o Mesmo" title="Treine Duro Ou Continue o Mesmo">
</div>

<script type="text/javascript">
  function horarios(){
    $('#content').load('horarios.php');
  };

  function planos(){
    $('#content').load('planos.php');
  };

</script>

<!-- CONTEUDO DA PAGINA -->
<div class="container">
  <div id="conteudo">
    <div class="container">  

      <div class="col-md-5">
        <img src="img/relogio.png" alt="Relogio Analogico" title="Nossos Horarios" class="img-responsive imagem" >
        <h3 class="servicos">Conheça nossos horários</h3>
        <button class="btn" onclick="horarios()">Veja Mais</button>
      </div>  

      <div class="col-md-5">
        <img src="img/planos.png" alt="Nossos Planos" title="Nossos Planos" class="img-responsive  imagem">
        <h3 class="servicos">Veja Mais Sobre Nossos Planos</h3>
        <button class="btn" onclick="planos()">Saiba Mais</button>
      </div>

    </div>  
  </div>
</div>