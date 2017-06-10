<h1>Noticias em destaque:</h1>
<div class="row"> 
<?php
	//mostrar somente 4 noticias
	//select para mostrar as noticias
	$sql = "select * from noticia limit 4";
	//executar o sql guardar o resultado
	$resultado = mysqli_query($con,$sql);
	//separa o select e guarda por linha
	while ($dados = mysqli_fetch_array($resultado)){
		//separar em variaveis
		$id = $dados["id"];
		$titulo = $dados["titulo"];
		$foto = $dados["foto"];

 		echo "<div class='col-md-3 text-center'>
 		<a href='index.php?pg=mais&id=$id'>
 			<img src='imagens/$foto' class='thumbnail img'>
 			<p>$titulo</p>
 		</a>
 		</div>";
	}

?>
</div>