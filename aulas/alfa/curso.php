<?php  
	//Recuperar a Variavel

	$id = "";

	if (isset($_GET["id"])){
		$id = trim($_GET["id"]);
	}

	//Selecionar o registro no banco
	$sql = "select * from curso where id = ".(int)$id." limit 1";
	
	// MOSTRAR COMANDO SQL NA TELA
	// echo $sql;

	// EXECUTAR O COMANDO SQL
	$resultado = mysqli_query($con,$sql);

	// SEPARAR OS DADOS EM 1 ARRAY
	$dados = mysqli_fetch_array($resultado);

	$id = $dados["id"];
	$curso = $dados["curso"];
	$perfil = $dados["perfil"];
	$mercado = $dados["mercado"];
	$area = $dados["area"];


	// MOSTRAR OS DADOS NA TELA
	//echo "<h1>$curso</h1>";
?>
	<div class="container"	>
		<h1><b><?=$curso;?></b></h1>
		<!-- <h1><?php echo $curso; ?></h1>  -->
		
		<div class="container">	
			<h3>Perfil do Profissional</h3>
			<?php echo $perfil; ?>
			
			<h3>Àrea de Atuação</h3>
			<?php echo $area; ?>

			<h3>Mercado de Trabalho</h3>
			<p><?php echo $mercado; ?></p>
		</div>	
	</div>	