<a href="inicial.php?pg=novoUsuario"><button class="btn">Cadastrar Usuario</button></a>
<h2 style='text-align: center'>Usuarios</h2>
<?php
	include "conecta.php";

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