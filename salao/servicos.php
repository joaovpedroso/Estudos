<?php
	include "bloqueio.php";
?>
<div class="row">
	<div class="col-md-4">
		<a href="inicial.php?pg=compras"><button class="btn btn-success">Cadastrar</button></a>
	</div>	
	<form name="buscar" action="inicial.php?pg=buscar&tipo=servicos" method="post">
		<div class="col-md-5">
			<input type="text" name="busca" class="form-control" placeholder="Nome do Servico">
		</div>
		<div class="col-md-3">
				<button type="submit" name="buscar" class="btn btn-success">Buscar</button>
		</div>
	</form>		
</div>
<h2 style='text-align: center'>Servicos</h2>
<div class="container">
	<?php
		$sql = "SELECT * FROM servicos order by descricao";
		$resultado = mysqli_query($con, $sql);
		while($dados = mysqli_fetch_array($resultado)){
			$id = $dados["id"];
			$nome = $dados["nome"];
			$descricao = $dados["descricao"];
			$valor = $dados["valor"];

			echo "<div class='panel panel-default'>
						<div class='panel-heading'><a href='inicial.php?pg=detalhes&id=$id&tipo=servico'>$nome</a></div> 
							<table class='table'>	
						  		
							</table> 	
				  	</div>";
		}
	?>
</div>