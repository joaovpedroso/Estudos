<?php
	include "conecta.php";

	$data_entrada = $_POST["datafiltro"];
	//echo "Data para Filtrar ENTRADAS -- $data_entrada";
	
	$sql = "SELECT * FROM entradas WHERE data_entrada = '$data_entrada'";
	$resultado = mysqli_query($con,$sql);

	$registros = mysqli_num_rows($resultado);
	//echo "<br>$registros - Registros encontrados";
	if($registros > 0){
		echo "<div class='alert alert-success text-center container'> 
	              Compras Encontradas ! <br></br>
	                            
	          	 </div>";
	}else{
		echo "<div class='alert alert-danger text-center container'> 
	              Compras Não Encontradas ! <br></br>
	                            
	          	 </div>";
	}

	while($dados = mysqli_fetch_array($resultado)){
		$id = $dados["id"];
		$valor = $dados["valor"];
		$produtos = $dados["produtos"];

		echo "  <div class='panel panel-default'>
					<div class='panel-heading'><a href='inicial.php?pg=detalhes&id=$id'>$data_entrada</a></div> 
						<table class='table'>	
					  		
						</table> 	
			  	</div>
			 ";
	}

	echo"<a href='inicial.php?pg=entradas'><button class='btn'>Voltar</button>";
?>