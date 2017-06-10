<script type="text/javascript">
    var aceso = false;

         function lampada() {

             if (aceso) {
                 alert('A Lampa Ira Se Apagar !');
                 aceso = false;
             } else {

                 alert('Lampada Ira Acender !');
                 aceso = true;
                 
             }
          }
</script>
<button class="btn btn-primary" onclick="return lampada()">Lampdada 1</button>