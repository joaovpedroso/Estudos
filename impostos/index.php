<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Calculadora de Impostos</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <img src="img/logoRodrigoRecorte.jpg" class="img-responsive" alt="Rodrigo Resende" title="Rodrigo Resende Calculadora de Impostos" style="width:100%; height: 10em;"> 
    <div class="container"> 
      <h2><b>Calculadora de Impostos</b></h2><hr>
      <form name="calculadora" method="POST"> 
        <div class="form-group">
          <label for="produto">Produto:
            <input type="text" name="produto" placeholder="Nome do Produto " required class="form-control">
          </label>
          <label for="valor">Valor:
            <input type="text" name="valor" placeholder=" R$ " required class="form-control"> 
          </label>
          <label for="imposto">Imposto %:
            <input type="text" name="imposto" class="form-control" required placeholder="%">            
          </label>
        </div>
        <p style="color: red;"><b>Obs* Quando Inserir Valores com casas decimais informar ' . ' no lugar de ' , '</b></p>
        <button type="submit" class="btn btn-default">Fazer Calculo</button>
      </form>

      <hr>
      <table class="table table-bordered table-responsive">
        <tr>
          <td><b>Produto</b></td>
          <td><b>Imposto %</b></td>
          <td><b>Imposto R$</b></td>
          <td><b>Valor R$ (C/ Impostos)</b></td>
          <td><b>Valor R$ (S/ Impostos)</b></td>
        </tr>
        <tr>

      <?php
        if ( isset ( $_POST['produto'] ) ){
          $produto = $_POST['produto'];
          $valor = $_POST['valor'];
          $imposto = $_POST['imposto'];

          $impostoRs = ($imposto * $valor) / 100;

          echo"<td>$produto</td>";
          echo"<td>$imposto%</td>";
          echo"<td>$impostoRs</td>";
          echo"<td><b>$valor</b></td>";
          echo "<td><b>".($valor-$impostoRs)."</b></td>";
        }else if ( isset ( $_POST['valor'] ) ){
          $produto = $_POST['produto'];
          $valor = $_POST['valor'];
          $imposto = $_POST['imposto'];

          $impostoRs = ($imposto * $valor) / 100;

          echo"<td>$produto</td>";
          echo"<td>$imposto</td>";
          echo"<td>$impostoRs</td>";
          echo"<td><b>$valor</b></td>";
        }else if ( isset ( $_POST['imposto'] ) ){
          $produto = $_POST['produto'];
          $valor = $_POST['valor'];
          $imposto = $_POST['imposto'];

          $impostoRs = ($imposto * $valor) / 100;

          echo"<td>$produto</td>";
          echo"<td>$imposto</td>";
          echo"<td>$impostoRs</td>";
          echo"<td><b>$valor</b></td>";

        }else {
          echo "";
        }

      ?>
        </tr>
      </table>
    </div> 
      <div class="well" style="text-align: center; background: black; color: white; bottom: 0;float:left; width:100%;">
        <p>Desenvolvido Por Joao Victor D. Pedroso <br> Umuarama - PR </p>
      </div>
      <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
      <script src="js/jquery.min.js"></script>
      <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
      <script src="js/bootstrap.min.js"></script>
 
  </body>
</html>