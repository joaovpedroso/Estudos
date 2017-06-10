<!-- 
    <TABLE>
    TR - LINHA 
    TD - COLUNA 
-->
<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Carrinho</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"/></script>
		<script type="text/javascript" src="js/jquery.maskMoney.min.js"/></script>
	</head>
	<body>
		<h1>Carrinho de Compras:</h1>
		<table class="table table-bordered">
			<tr style="text-align: center">
				<td><b>Produto</b></td>
				<td><b>Valor</b></td>
				<td><b>Lancamento</b></td>
			</tr>
			<?php
				$valorTotal = 0.0;
				foreach( $_SESSION["produto"] as $p ){
					//Recuperar os Valores
					$nome = $p["nome"];
					$valor = $p["valor"];
					$lancamento = $p["lancamento"];
					$valorTotal += $valor; 
					echo "<tr>
							<td>$nome</td>
							<td>$valor</td>
							<td>$lancamento</td>
						  </tr>";
				}
				echo "<tr>
						<td>Valor Total:</td>
						<td>$valorTotal</td>
					 </tr>";
			?>
			<?php
				echo "<a href='index.php'><button class='btn btn-default'>Adicionar Produtos</button></a>";
			?>
		</table>