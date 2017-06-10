<?php
	include "conecta.php";

	$dia  = $_POST["dia"];
	$mes  = $_POST["mes"];
	$ano  = $_POST["ano"];
	$tipo = $_POST["tipo"];

	if($tipo == "entrada"){
		echo "<h2 class='titulo'>Compras Encontradas</h2>  ";
		$sql = "SELECT * FROM produtos WHERE data_compra like '$ano-$mes%' ";
		$resultado = mysqli_query($con, $sql);
		$total_compra = 0;

		while($dados = mysqli_fetch_array($resultado)){
			$id = $dados["id"];
			$data_compra = $dados["data_compra"];
			$valor = $dados["valor"];
			$produtos = $dados["descricao"];
			$total_compra += $valor;

			echo "<div class='panel panel-default'>
					<div class='panel-heading'>
						<a href='inicial.php?pg=detalhes&id=$id&tipo=produto'>
						<div class='row'>
							<div class='col-md-10'>
								Data da Compra: $data_compra
							</div>
						 	<div class='col-md-2'>
						 		Valor: R$ $valor
						 	</div>
						</div>
						</a>
					</div> 
						<table class='table'>	
					  		
						</table> 	
			  	</div>";
		}
		echo "<div class='panel panel-default'> 
				<div class='panel-heading' style='padding: 30px;'>
					<div class='col-md-10'>
						<b>TOTAL DE COMPRAS</b>
					</div>
					<div class='col-md-2'>
						<b>R$ $total_compra</b>
					</div>
				</div>
			  </div>";

		echo "<a href='inicial.php?pg=relatorios'><button class='btn'>Nova Pesquisa</button></a>";	  
	}else if($tipo =="saida"){
		$total_vendas = 0;

		echo "<h2 class='titulo'>Vendas Encontradas</h2>  ";
		$sql = "SELECT * FROM saidas WHERE data_saida like '$ano-$mes%' ";
		$resultado = mysqli_query($con, $sql);

		while($dados = mysqli_fetch_array($resultado)){
			$id = $dados["id"];
			$data_venda = $dados["data_saida"];
			$valor = $dados["valor"];
			$produtos = $dados["produtos"];
			$total_vendas += $valor;

			echo "<div class='panel panel-default'>
					<div class='panel-heading'><a href='inicial.php?pg=detalhes&id=$id&tipo=vendas'>$data_venda</a></div> 
						<table class='table'>	
					  		
						</table> 	
			  	</div>";
		}


		echo "<div class='panel panel-default'> 
				<div class='panel-heading' style='padding: 30px;'>
					<div class='col-md-10'>
						<b>TOTAL DE VENDAS</b>
					</div>
					<div class='col-md-2'>
						<b>R$ $total_vendas</b>
					</div>
				</div>
			  </div>";

		
		echo "<a href='inicial.php?pg=relatorios'><button class='btn'>Nova Pesquisa</button></a>";	  	  
	}
?>