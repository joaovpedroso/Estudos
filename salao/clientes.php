<?php
	include "bloqueio.php";
?>
<div class="row">
	<div class="col-md-4">
		<a href="inicial.php?pg=cadastrocliente"><button class="btn btn-success">Cadastrar</button></a>
	</div>	
	<form name="buscar" action="inicial.php?pg=buscar&tipo=clientes" method="post">
		<div class="col-md-5">
			<input type="text" name="busca" class="form-control" placeholder="Nome para buscar cliente">
		</div>
		<div class="col-md-3">
				<button type="submit" name="buscar" class="btn btn-success">Buscar</button>
		</div>
	</form>		
</div>

<h2 style='text-align: center;'>Clientes</h2>
<div class='container'>
	<?php
		$sql = "SELECT * FROM clientes WHERE id_status = '1' order by nome";
		$resultado = mysqli_query($con, $sql);	  	
		while ($dados = mysqli_fetch_array($resultado)) {
			$id = $dados["id"];
			$nome = $dados["nome"];
			$telefone = $dados["telefone"];
			$email = $dados["email"];
			$endereco = $dados["endereco"];
			echo "
					<div class='panel panel-default'>
						<div class='panel-heading'><a href='inicial.php?pg=detalhes&id=$id&tipo=cliente'>$nome</a></div> 
							<table class='table'>	
						  		
							</table> 	
				  	</div>
				 ";
		}
	?>
</div>		