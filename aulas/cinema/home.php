<h1>Filme em Cartaz:</h1>
<div class="row"> 
<?php
	//mostrar 4 filmes
	//select para mostrar 4 filmes
	$sql = "select * from filme limit 4";
	//executar o sql guardar o resultado
	$resultado = mysqli_query($con,$sql);
	//separa o select e guarda por linha
	while ($dados = mysqli_fetch_array($resultado)){
		//separar em variaveis
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
</div>

