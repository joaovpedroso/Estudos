<div class="container ">
	<h1>Produtos em Promoção</h1>
	<div class="container">
		<div class="container">
			<div class="row">
				<?php
					//SQL para selecionar apenas 4 produtos no banco
					$sql = "SELECT * FROM produto limit 4";
					//Variavel executando a pesquisa da SQL
					$resultado = mysqli_query($con,$sql);
					while ($dados = mysqli_fetch_array($resultado)){
						//separar em variaveis
						$id = $dados["id"];
						$nome = $dados["nome"];
						$foto = $dados["foto"];

				 		echo "<div class='col-md-3 text-center'>
				 		<a href='index.php?pg=detalhes&id=$id'>
				 			<img class='thumbnail imagem' src='imagens/$foto' >
				 			<p>$nome</p>
				 		</a>
				 		</div>";
					}

				?>
			</div>
		</div>	
	</div>	
</div>	