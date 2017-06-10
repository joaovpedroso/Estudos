<!-- 
    <TABLE>
    TR - LINHA 
    TD - COLUNA 
-->
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trabalhando com Sessoes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"/></script>
    <script type="text/javascript" src="js/jquery.maskMoney.min.js"/></script>
  </head>
  <script>
    $(function(){
      $('#valor').maskMoney({
                thousands: '.',
                decimal: ','
      });
    })
  </script>
  <body> 
    <h1>Formularios</h1>
    <form name="form1" method="post" action="gravar.php">
      <label for="nome">Nome do Produto:
      <input type="text" name="nome" class="form-control" required></label>
      <label for="lancamento">Lançamento:
      <select name="lancamento" class="form-control" required>
        <option></option>
        <option>Sim</option>
        <option>Nao</option>
      </select></label>
      <label for="valor">Valor do Produto
      <input type="text" name="valor" id="valor" class="form-control" required></label>

      <button type="submit" class="btn btn-default">Gravar</button><br>

    <!--
      Exemplos de Ações JavaScript

      <br><a href="javascript: alert('Salve Manolo !');">
      Alert
      </a><br>

      <a href="javascripr: history.back();">
      Volta na pagina anterior
      </a><br>

      <a href="javascript: location.reload();">
      Atualiza a Pagina
      </a><br>

      <a href="javascript: location.href='http://www.uol.com.br';">
      Pagina do Uol
      </a><br>

      <a href="javascript: window.open();">
      Abre outra janela
      </a>
    -->
    </form>
    
  </body>
</html>