<?php
	include "bloqueio.php";
?>
<?php
		$id = $_GET["id"];
?>

<div class='container'>

			<div class='panel panel-default'>
				<div class='panel-heading'><a href='#'><b>Historico De Compras:</b></a></div> 
				<table class='table'>	
				  		<ul class='list-group'>
					  		<?php
					  			$sql = "SELECT * FROM produtos WHERE id in (SELECT id_produtos FROM compra WHERE id in (SELECT id FROM compra WHERE id in (SELECT id_compra FROM compra_clientes WHERE id_clientes = $id )))";	

					  			$resultado = mysqli_query($con, $sql);
								
								if($resultado == false){
									die("Nenhum Resultado encontrado") ;
								}
								while($dados = mysqli_fetch_array($resultado)){
									 	$id_produtos = $dados["id"];
									 	$nome = $dados["nome"];
									 	$valor = $dados["valor"];
									 	$descricao = $dados["descricao"];
									 	$categoria_id = $dados["categoria_id"];								 	
											$sql_data = "SELECT datacompra FROM compra WHERE id in (SELECT id_compra FROM compra_clientes WHERE id_clientes = $id)";
											$resul = mysqli_query($con, $sql_data);
											$dados_data = mysqli_fetch_array($resul);
												$datacompra = $dados_data["datacompra"];
												
											
												

											$sql_marca = "SELECT categoria FROM categoria WHERE id in (SELECT categoria_id FROM produtos WHERE id in (SELECT id_produtos FROM compra WHERE id in (SELECT id_compra FROM compra_clientes WHERE id_clientes = $id)))";
											$resul_marca = mysqli_query($con, $sql_marca);
											$dados_marca = mysqli_fetch_array($resul_marca);
												$marca = $dados_marca["categoria"];
												
									 	echo "<li class='list-group-item'>
									 			<div class='row'>
											 			<div class='col-md-6'>
												 			Produto: $nome<br>					 	 
											 			</div>
											 			<div class='col-md-4'>
											 				Valor R$: $valor <br>
											 			</div>
											 	</div>
											 	<div class='row'>
												 	<div class='col-md-6'>
												 		Descrição: $descricao<br>
												 	</div>
												 	<div class='col-md-4'>
												 		Marca: $marca
												 	</div>
											 	</div>
											 	<div class='row'>
											 		<div class='col-md-6'>
											 			Data da Compra: $datacompra
											 		</div>
											 	</div>

									 		  </li>
									 		  ";
									 
								}			
					  		?>			  		
				  		</ul>
					</table> 	
		  	</div>
		</div>

		<?php
			echo "<a href='inicial.php?pg=detalhes&id=$id&tipo=cliente'><button class='btn btn-success'>Voltar a Pagina Anterior</button></a>";
		?>