<?php
	include "menu.php";
?>
	<div class="well container">
		<h1>Lista de Categorias</h1>

		<a href="categoria.php" title="Cadastro de Categoria" class="btn btn-default pull-right">
			<i class="glyphicon glyphicon-file"></i> Novo Cadastro
		</a>

		<div class="clearfix"></div>

		<form name="pesquisa" method="get" class="form-inline text-center">
			<label for="palavra">Palavra-Chave:
				<input type="text" name="palavra" required class="form-control" placeholder="Digite uma palavra">
			</label>
			<button type="submit" class="btn btn-default">
				<i class="glyphicon glyphicon-search"></i>
			</button>
		</form>

		<?php
			//Busca da categoria
			$sql = "SELECT * FROM categoria ORDER BY categoria";
			$consulta = $pdo->prepare($sql);
			$consulta->execute();

			//Conta as linhas
			$conta = $consulta->rowCount();
			echo "Foram encontrados $conta cadastros";
			
		?>

		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<td width="10%">ID:</td>
					<td>Categoria</td>
					<td width="15%">Opções</td>
				</tr>
			</thead>
			<?php	
				while( $dados = $consulta->fetch(PDO::FETCH_OBJ) ){
				$id = $dados->id;
				$categoria = $dados->categoria;

				echo "<tr> 
							  <td>$id</td>
							  <td>$categoria</td>
							  <td>
							  	<a href='categoria.php?id=$id' class='btn btn-primary'>
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