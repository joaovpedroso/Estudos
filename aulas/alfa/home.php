<img src="imagens/banner.png" class="thumbnail">

<h1>Cursos em Destaque</h1>

<div class="row">
	<?php

		//selecionar os cursos
		$sql = "select * from curso 
			order by rand() limit 3";
		//executar o sql
		$resultado = mysqli_query($con,$sql);

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
</div>