<?php
	include "bloqueio.php";
?>
<div class="row">
	<div class="col-md-4">
		<a href="inicial.php?pg=compras"><button class="btn btn-success">Cadastrar</button></a>
	</div>	
	<form name="buscar" action="inicial.php?pg=buscar&tipo=produtos" method="post">
		<div class="col-md-5">
			<input type="text" name="busca" class="form-control" placeholder="Nome do Produto">
		</div>
		<div class="col-md-3">
				<button type="submit" name="buscar" class="btn btn-success">Buscar</button>
		</div>
	</form>		
</div>
<h2 style='text-align: center'>Produtos</h2>
<div class="container">
	<?php
		$sql = "SELECT * FROM produtos order by nome";
		$resultado = mysqli_query($con, $sql);
		while ($dados = mysqli_fetch_array($resultado)) {
			$id = $dados["id"];
			$nome = $dados["nome"];
			$valor = $dados["valor"];
			$descricao = $dados["descricao"];
			$categoria_id = $dados["categoria_id"];

			$sql_categoria = "SELECT marca FROM categoria WHERE id = $categoria_id";
			$resul_categoria = mysqli_query($con, $sql_categoria);
			$dados_categoria = mysqli_fetch_array($resul_categoria);
				$categoria = $dados_categoria["marca"];

				echo "<div class='panel panel-default'>
						<div class='panel-heading'><a href='inicial.php?pg=detalhes&id=$id&tipo=produto'>$nome</a></div> 
							<table class='table'>	
						  		
							</table> 	
				  	</div>	";

		}
	?>
</div>