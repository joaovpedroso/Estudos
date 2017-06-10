<?php
	include "bloqueio.php";
?>
<div class="container">
	<h3>Pagina de busca</h3>

<?php
	$busca = $_POST["busca"];
	$tipo = $_GET["tipo"];

	if($tipo == "clientes"){

		$sql = ("SELECT * FROM clientes WHERE nome like '$busca%' ");
		

		$resultado = mysqli_query($con, $sql);
		$registros = mysqli_num_rows($resultado);

		if($registros >= 1){
			echo "<div class='alert alert-success text-center container'> 
	              Cliente Encontrado ! <br></br>
	                            
	          	 </div>";
		}else{
			echo "<div class='alert alert-danger text-center container'> 
	              Cliente Não Encontrado ! <br></br>
	                            
	          	 </div>";
		
		}
		
		while($dados = mysqli_fetch_array($resultado)){
			$id = $dados["id"];
				$nome = $dados["nome"];
				$telefone = $dados["telefone"];
				$email = $dados["email"];
				$endereco = $dados["endereco"];
				echo "
						<div class='panel panel-default'>
							<div class='panel-heading'><a href='inicial.php?pg=detalhes&id=$id'>$nome</a></div> 
								<table class='table'>	
							  		
								</table> 	
					  	</div> 
		    		";
		}
		echo "<a href='inicial.php?pg=clientes'><button class='btn btn-success'>Voltar a Pagina Anterior</button></a>";

	}else if($tipo == "produtos"){
		
		$sql = ("SELECT * FROM produtos WHERE nome like '$busca%' ");
		$resultado = mysqli_query($con, $sql);
		$registros = mysqli_num_rows($resultado);

		if($registros >= 1 ){	
			echo "<div class='alert alert-success text-center container'> 
	              Produto Encontrado ! <br></br>     
	          	 </div>";
		}else{
			echo "<div class='alert alert-danger text-center container'> 
	              Produto Não Encontrado ! <br></br>   
	          	 </div>";
		}

		while($dados = mysqli_fetch_array($resultado)){
			$id = $dados["id"];
			$nome = $dados["nome"];
			$valor = $dados["valor"];
			$descricao = $dados["descricao"];
			$categoria_id = $dados["categoria_id"];
			$quantidade = $dados["quantidade"];

			$sql_categoria = "SELECT marca FROM categoria WHERE id = $categoria_id";
			$resul_categoria = mysqli_query($con, $sql_categoria);
			$dados_categoria = mysqli_fetch_array($resul_categoria);
				$categoria = $dados_categoria["marca"];

			echo "
						<div class='panel panel-default'>
							<div class='panel-heading'><a href='inicial.php?pg=detalhes&id=$id&tipo=produto'>$nome</a></div> 
								<table class='table'>							  		
								</table> 	
					  	</div> 
		    		";
		}
		echo "<a href='inicial.php?pg=produtos'><button class='btn btn-success'>Voltar a Pagina Anterior</button></a>";

	}else if($tipo == "servicos"){

		$sql = ("SELECT * FROM servicos WHERE nome like '$busca%' ");
		$resultado = mysqli_query($con, $sql);
		$registros = mysqli_num_rows($resultado);

		if($registros >= 1 ){	
			echo "<div class='alert alert-success text-center container'> 
	              Servico Encontrado ! <br></br>     
	          	 </div>";
		}else{
			echo "<div class='alert alert-danger text-center container'> 
	              Servico Não Encontrado ! <br></br>   
	          	 </div>";
		}

		while($dados = mysqli_fetch_array($resultado)){
			$id = $dados["id"];
			$nome = $dados["nome"];
			$descricao = $dados["descricao"];

			echo "<div class='panel panel-default'>
							<div class='panel-heading'><a href='inicial.php?pg=detalhes&id=$id&tipo=servico'>$nome</a></div> 
								<table class='table'>							  		
								</table> 	
					  	</div> 
		    		";
		}
		echo "<a href='inicial.php?pg=servicos'><button class='btn btn-success'>Voltar a Pagina Anterior</button></a>";

	}


?>	
</div>	