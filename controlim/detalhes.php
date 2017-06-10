<?php
	include "conecta.php";

	$id = $_GET["id"];
	$tipo = $_GET["tipo"];

	if($tipo == "entrada"){
		$sql = "SELECT * FROM entradas WHERE id =".(int)$id;
		$resultado = mysqli_query($con,$sql);
		while($dados = mysqli_fetch_array($resultado)){
			$valor = $dados["valor"];
			$produtos = $dados["produtos"];
			$datacompra = $dados["data_entrada"];
	
			echo "<div class='container'>
							<div class='panel panel-default'>	
								<div class='panel-heading'></a>
									<div class='row'>
										<div class='col-md-5'>	
											<a href='#'><b></b></a>
										</div> 
									</div>	
								</div>	
									<table class='table'>	
									  		<ul class='list-group'>
									  			<div class='row'>
									  				<div class='col-md-6'>
												  		<li class='list-group-item'>Valor: R$.$valor<br></li>
											  		</div>
											  		<div class='col-md-6'>
											  			<li class='list-group-item'>Data da Compra: $datacompra<br></li>
											  		</div>
										  		</div>
												<div class='row'>
													<div class='col-md-6'>
												  		<li class='list-group-item'><b>Descricao:</b><br> $produtos<br></li>
												  	</div>	
												</div> 	
									  		</ul>
										</table> 	
							  	</div>
						 </div>
					<a href='inicial.php?pg=entradas'><button class='btn btn-success'>Pagina de Compras</button></a>";
				}
	}else if($tipo == "vendas"){
		$sql = "SELECT * FROM saidas WHERE id =".(int)$id;
		$resultado = mysqli_query($con,$sql);
		while($dados = mysqli_fetch_array($resultado)){
			$valor = $dados["valor"];
			$produtos = $dados["produtos"];
			$datavenda = $dados["data_saida"];
	
			echo "<div class='container'>
							<div class='panel panel-default'>	
								<div class='panel-heading'></a>
									<div class='row'>
										<div class='col-md-5'>	
											<a href='#'><b></b></a>
										</div> 
									</div>	
								</div>	
									<table class='table'>	
									  		<ul class='list-group'>
									  			<div class='row'>
									  				<div class='col-md-6'>
												  		<li class='list-group-item'>Valor: R$.$valor<br></li>
											  		</div>
											  		<div class='col-md-6'>
											  			<li class='list-group-item'>Data da Venda: $datavenda<br></li>
											  		</div>
										  		</div>
												<div class='row'>
													<div class='col-md-6'>
												  		<li class='list-group-item'><b>Descricao:</b><br> $produtos<br></li>
												  	</div>	
												</div> 	
									  		</ul>
										</table> 	
							  	</div>
						 </div>
					<a href='inicial.php?pg=saidas'><button class='btn btn-success'>Pagina de Vendas</button></a>";
				}
	}else if($tipo == "usuario"){
		echo"DETALHES DE USUARIO)";
	}

?>