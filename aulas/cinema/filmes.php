<?php
	//Recuperar o ID do filme enviado por GET
	$id = 0;
	//Verifica se a variavel Existe
	if (isset($_GET["id"])){
		$id = trim($_GET["id"]);
	}else{

		$sql = "Select * from filme";

		$resultado = mysqli_query($con, $sql);

		while($dados = mysqli_fetch_array($resultado)){
			$id = $dados["id"];
			$titulo = $dados["titulo"];
			$imagem = $dados["imagem"];
			echo "<div class='col-md-3 text-center'>
 					<a href='index.php?pg=detalhes&id=$id'>
 						<img src='imagens/$imagem' class='thumbnail img'>
 						<p>$titulo</p>
 					</a>
 				  </div>";
		}
			
	}



	//FAz a consulta no banco da categoria selecionada
	$sql = "Select * from filme where id = ".(int)$id;

	//Retorna os resultados
	$resultado = mysqli_query($con, $sql);
	
	//Separa os resultados em variaveis e mostra-os
	while($dados = mysqli_fetch_array($resultado)){
		$id = $dados["id"];
		$titulo = $dados["titulo"];
		$imagem = $dados["imagem"];
		
		echo "<div class='col-md-3 text-center'>
 		<a href='index.php?pg=detalhes&id=$id'>
 			<img src='imagens/$imagem' class='thumbnail img'>
 			<p>$titulo</p>
 		</a>
 		</div>";

 		
	}
?>