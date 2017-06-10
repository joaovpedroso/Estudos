<a href="inicial.php?pg=cadsaidas"><button class="btn">Efetuar Saida</button></a>

<a href="inicial.php?pg=relatorios"><button class="btn">Relatorio</button></a>

<div class="container">
	<h3>Listar Saidas</h3>
		<div class="container">	
			<form name="filtro" action="inicial.php?pg=filtrarSaidas" method="post">
				<div class="form-group">
					<label>Pesquisar por Data</label>
					<input type="date" name="datafiltro" class="form-control">
				</div>	
				<div class="col-md-3">
					<button class="btn"  type="submit">Pesquisar</button>
				</div>
			</form>

			<div class="clear"></div>
			<h2 class="titulo">Saidas Proximas</h2>
			<?php
				include "conecta.php";

				//Pega a data do ANO e MES atual
				$dataHoje = date("Y");

				$sql = "SELECT * FROM saidas WHERE data_saida like '$dataHoje%' limit 4";
				$resultado = mysqli_query($con, $sql);
				while ($dados = mysqli_fetch_array($resultado)) {
					$id = $dados["id"];
					$valor = $dados["valor"];
					$data_saida = $dados["data_saida"];
					$produtos = $dados["produtos"];

					echo "<div class='panel panel-default'>
							<div class='panel-heading'>
								<a href='inicial.php?pg=detalhes&id=$id&tipo=vendas'>
									Data de entrada: $data_saida - 
									Valor: R$$valor
								</a>
							</div> 
							<table class='table'>	
						  		
							</table> 	
				  		  </div>
			 		";
				}

			?>

		</div>
</div>