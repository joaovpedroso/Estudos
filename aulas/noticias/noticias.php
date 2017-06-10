<?php
	//Recuperar o ID da noticia
	$id = 0;
	//Verifica se a ID Existe
	if (isset($_GET["id"])){
		$id = trim($_GET["id"]);
	}else{

		$sql = "Select * from noticia";

		$resultado = mysqli_query($con, $sql);

		while($dados = mysqli_fetch_array($resultado)){
			$id = $dados["id"];
			$titulo = $dados["titulo"];
			$foto = $dados["foto"];
			echo "<div class='col-md-3 text-center espaco'>
 					<a href='index.php?pg=mais&id=$id'>
 						<img src='imagens/$foto' class='thumbnail img'>
 						<p>$titulo</p>
 					</a>
 				  </div>";
		}
			
	}



	//FAz a consulta no banco da categoria selecionada
	$sql = "Select * from noticia where categoria_id = ".(int)$id;

	//Retorna os resultados
	$resultado = mysqli_query($con, $sql);
	
	//Separa os resultados em variaveis e mostra-os com o ECHO
	while($dados = mysqli_fetch_array($resultado)){
		$id = $dados["id"];
		$titulo = $dados["titulo"];
		$foto = $dados["foto"];
		
		echo "<div class='col-md-3 text-center espaco'>
 				<a href='index.php?pg=mais&id=$id'>
 					<img src='imagens/$foto' class='thumbnail img'>
 					<p>$titulo</p>
 				</a>
 			  </div>";

 		
	}
?>