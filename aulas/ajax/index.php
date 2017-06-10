<!DOCTYPE html>
<html  lang="pt-br">
<head>
	<title>Teste Ajax Tabela</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
</head>

<script type="text/javascript" language="javascript">
	$(function($){
		//Quando Clicar em adicionar produtos
		$('#add_product').click(function(){
			
		})
	})
</script>

<body>
	<div id="venda">
		<div class="table-responsive">
			<table class="table">
				<!--Colunas-->
				<thead>
		    		<tr>
		    			<th>Abc</th>
		    		</tr>
		    		<tr>
		    			<th>Def</th>
		    		</tr>
		    		<tr>
		    			<th>Ghi</th>
		    		</tr>
				</thead>
	    		

	    		<!--Linhas-->
	    		<td> Xtz</td>
	  		</table>
	  	</div>
	  		
			<?php
				include "conecta.php";

				$sql = "SELECT * FROM produtos order by nome";
				$query = mysqli_query($con, $sql);
				while ($resultado = mysqli_fetch_array($query)) {
					$id = $resultado['id'];
					$nome = $resultado['nome'];
					$valor = $resultado['valor'];
					$quantidade = $resultado['qtd'];

					echo "Produto: $nome <br> Valor: $valor </br> Quantidade: $quantidade";
				}
			?>
	</div>

	<span id="adicionar_produto"></span><a href="javascript:func()" id="add_product">Adicionar Produto</a>


    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>