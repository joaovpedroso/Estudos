<a href="inicial.php?pg=cadentradas"><button class="btn">Cadastrar Entrada</button></a>

<a href="inicial.php?pg=relatorios"><button class="btn">Relatorio</button></a>

<div class="container">
	<h3>Listar Entradas</h3>
		<div class="container">	
			<form name="filtro" action="inicial.php?pg=filtrar" method="post">
				<div class="form-group">
					<label>Pesquisar por Data</label>
					<input type="date" name="datafiltro" class="form-control">
				</div>	
				<div class="col-md-3">
					<button class="btn"  type="submit">Pesquisar</button>
				</div>
			</form>

			<div class="clear"></div>
			<h2 class="titulo">Entradas Proximas</h2>
			<?php
				include "conecta.php";

				//Pega a data do ANO atual
				$dataHoje = date("Y");

				$sql = "SELECT * FROM entradas WHERE data_entrada like '$dataHoje%' limit 4";
				$resultado = mysqli_query($con, $sql);
				while ($dados = mysqli_fetch_array($resultado)) {
					$id = $dados["id"];
					$valor = $dados["valor"];
					$data_entrada = $dados["data_entrada"];
					$produtos = $dados["produtos"];

					echo "<div class='panel panel-default'>
							<div class='panel-heading'>
								<a href='inicial.php?pg=detalhes&id=$id&tipo=entrada'>
									Data de entrada: $data_entrada - 
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