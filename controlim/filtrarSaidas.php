<?php
	include "conecta.php";

	$data_saida = $_POST["datafiltro"];
	//echo "Data para Filtrar ENTRADAS -- $data_entrada";
	
	$sql = "SELECT * FROM saidas WHERE data_saida = '$data_saida'";
	$resultado = mysqli_query($con,$sql);

	$registros = mysqli_num_rows($resultado);
	//echo "<br>$registros - Registros encontrados";
	if($registros > 0){
		echo "<div class='alert alert-success text-center container'> 
	              Vendas Encontradas ! <br></br>
	                            
	          	 </div>";
	}else{
		echo "<div class='alert alert-danger text-center container'> 
	              Vendas Não Encontradas ! <br></br>
	                            
	          	 </div>";
	}

	while($dados = mysqli_fetch_array($resultado)){
		$id = $dados["id"];
		$valor = $dados["valor"];
		$produtos = $dados["produtos"];

		echo "  <div class='panel panel-default'>
					<div class='panel-heading'><a href='inicial.php?pg=detalhes&id=$id'>$data_saida</a></div> 
						<table class='table'>	
					  		
						</table> 	
			  	</div>
			 ";
	}

	echo"<a href='inicial.php?pg=saidas'><button class='btn'>Voltar</button>";
?>