<img src="imagens/banner.png" class="thumbnail">

		<h1>Cursos em Destaque:</h1>

		<div class="row">

		<?php

			$sql = "select * from curso order by rand() limit 3";
			$result = mysqli_query($con,$sql);
			while ($dados = mysqli_fetch_array($result)) {
				$id = $dados['id'];
				$curso = $dados['curso'];

				$tipo = $dados['tipo_id'];

				if($tipo == 1) $icone = "glyphicon glyphicon-education";
				else $icone = "glyphicon glyphicon-blackboard";

				echo "<div class='col-md-4 text-center'>
					<div class='thumbnail'>
						<h3><i class='$icone'></i></h3>

						<h2>$curso</h2>

						<a href='index.php?pg=curso&id=$id' class='btn btn-danger'>Detalhes</a>
					</div>
				</div>";

			}

		?>

		</div>