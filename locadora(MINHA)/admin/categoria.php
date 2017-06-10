<?php
	include "menu.php";
	
	if ( isset ( $_GET['id'] ) ) {
		$id = trim( $_GET['id'] );

		$sql = "SELECT categoria FROM categoria WHERE id = ? LIMIT 1";
		$consulta = $pdo->prepare($sql);
		$consulta->bindParam(1, $id);
		$consulta->execute();

		$dados = $consulta->fetch(PDO::FETCH_OBJ);
			$categoria = $dados->categoria;
		

	}else {
		$id = $categoria = "";
	}



?>
	<div class="container">
		<div class="well">
			<h1>Cadastro de Categorias</h1>
			<a href="categoria.php" class="btn btn-default pull-right">
				<i class="glyphicon glyphicon-file"></i> Novo Cadastro
			</a>
			<a href="listarCategoria.php" class="btn btn-default pull-right">
				<i class="glyphicon glyphicon-search"></i> Listar Categorias
			</a>

			<div class="clearfix"></div>

			<form name="formcadastro" method="post" action="salvarCategoria.php" novalidate>
				<fieldset>
					<legend>Preencha os campos</legend>

					<div class="control-group">
						<label for="id">ID:</label>
						<div class="control">
							<input type="text" name="id" class="form-control" readonly value="<?=$id;?>">
						</div>
					</div>

					<div class="control-group">
						<label for="categoria">Categoria</label>
						<div class="controls">
							<input type="text" name="categoria" class="form-control" required data-validation-required-message="Preencha a Categoria" value="<?=$categoria;?>"> 
						</div>	
					</div>

					<button type="submit" class="btn btn-default">
						<i class="glyphicon glyphicon-floppy-save" ></i> Salvar Dados
					</button>
				</fieldset>
			</form>
		</div>
	</div>
	
</body>
</html>	