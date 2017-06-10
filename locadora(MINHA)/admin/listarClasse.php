<?php
	include "menu.php";
?>
		<div class="well container">
			<h1>Lista de Classes</h1>

			<a href="classe.php" class="btn btn-default pull-right">
				<i class="glyphicon glyphicon-file"></i> Novo Cadastro
			</a>

			<div class="clearfix"></div>

			<form name="pesquisar" method="GET" class="form-inline text-center">
				
				<label for="pesquisa">Palavra-Chave:
					<input type="text" name="pesquisa" class="form-control" placeholder="O Que Deseja Pesquisar" required>
				</label>

				<a href="" class="btn btn-default">
					<i class="glyphicon glyphicon-search"></i>
				</a>
			</form>


			<?php 
				//PESQUISAR NO BANCO PARA MOSTRAR OS REGISTROS EM TABELA
				$sql = "SELECT * FROM classe ORDER BY classe";
				$consulta = $pdo->prepare($sql);
				$consulta->execute();

				$conta = $consulta->rowCount();
				echo "$conta Cadastros";
			?>

			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<td width="10%">ID:</td>
						<td>Classe</td>
						<td>Valor</td>
						<td width="15%">Opções</td>
					</tr>
				</thead>

				<?php
					while ( $dados = $consulta->fetch(PDO::FETCH_OBJ) ){
						$id = $dados->id;
						$classe = $dados->classe;
						$valor = $dados->valor;

						echo "
							<tr>
								<td>$id</td>
								<td>$classe</td>
								<td>$valor</td>
								<td>
									<a href='classe.php?id=$id' class='btn btn-primary'>
										<i class='glyphicon glyphicon-pencil'></i>
									</a>

									<a href='' class='btn btn-danger'>
										<i class='glyphicon glyphicon-erase'></i>
									</a>
								</td>
							</tr>";
					}
				?>

			</table>
		</div>

	</body>

</html>