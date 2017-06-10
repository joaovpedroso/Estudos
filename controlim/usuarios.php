<a href="inicial.php?pg=novoUsuario"><button class="btn">Cadastrar Usuario</button></a>
<?php
	include "conecta.php";

	echo "<h2 class='titulo'>Usuarios</h2>";

	$sql = "SELECT * FROM usuarios order by nome";
	$resultado = mysqli_query($con, $sql);
	while ($dados = mysqli_fetch_array($resultado)) {
		$id = $dados["id"];
		$usuario = $dados["usuario"];
		$senha = $dados["senha"];
		$nome = $dados["nome"];
		$email = $dados["email"];
		$datanascimento = $dados["datanascimento"];

		echo "<div class='panel panel-default'>
					<div class='panel-heading'><a href='inicial.php?pg=detalhes&id=$id&tipo=usuario'>$nome</a></div> 
						<table class='table'>	
					  		

						</table> 	
			  	</div>
		";
	}

?>