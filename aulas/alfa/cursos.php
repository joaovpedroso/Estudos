

<?php
		
		// RECUPEROU A VARIAVEL QUE DEFINE O TIPO
		$tipo = "";
		if (isset($_GET["id"])){
			$tipo = trim($_GET["id"]);
		}


		// PESQUISOU O TIPO NO BANCO DE DADOS
		$sql = "select * from tipo where id = ".$tipo;
		$resultado = mysqli_query($con,$sql);

		// MOSTROU O NOME DO TIPO ENCONTRADO NO BANCO DE DADOS
		while ($dados = mysqli_fetch_array($resultado)) {

			$id = $dados["id"];
			$nome = $dados["tipo"];
			echo "<br><h1>$nome</h1>";

		}	




		// FEZ A BUSCA DO CONTEUDO DO BD	
		$sql = "select * from curso where tipo_id = ".$tipo;

		$resultado = mysqli_query($con,$sql);



		//FEZ UM LACO DE REPETICAO PARA MOSTRAR TODO O CONTEUDO QUE FOI ENCONTRADO NO BANCO
		while ($dados = mysqli_fetch_array($resultado)) {

			$id = $dados["id"];
			$curso = $dados["curso"];

			echo "<div class='col-md-4 text-center'>
					<div class='thumbnail'>
						<h2>$curso</h2>
						<a href='index.php?pg=curso&id=$id' class='btn btn-success'>Saiba Mais</a>
					</div>
			</div>";
		}


	?>


