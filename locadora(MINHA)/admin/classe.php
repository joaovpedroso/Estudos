<?php
	include "menu.php";

	if ( isset ( $_GET['id'] ) ){
		$id = trim( $_GET['id'] );

		$sql = "SELECT classe, valor FROM classe WHERE id = ? LIMIT 1";
		$consulta = $pdo->prepare($sql);
		$consulta->bindParam(1, $id);
		$consulta->execute();

		$dados = $consulta->fetch(PDO::FETCH_OBJ);
			$classe = $dados->classe;
			$valor = $dados->valor;

	}else {
		$id = $classe = $valor = "";
	}
?>
	<div class="container">	
		<div class="well">
			<h1>Cadastro de Classes</h1>
			<a href="listarClasse.php" class="btn btn-default pull-right">
				<i class="glyphicon glyphicon-search"></i> Listar Classes
			</a>

			<a href="classe.php" class="btn btn-default pull-right">
				<i class="glyphicon glyphicon-file"></i> Novo Cadastro
			</a>

			<div class="clearfix"></div>

			<form name="formCadastro" method="POST" action="salvarClasse.php" novalidate>
				<fieldset>

					<legend>Preencha os campos</legend>
				
					<div class="control-group">
						<label for="id">ID:</label>
						<div class="controls">
							<input type="text" name="id" readonly class="form-control" value="<?=$id;?>">
						</div>	
					</div>

					<div class="control-group">
						<label for="classe">Classe:</label>
						<div class="controls">
							<input type="text" name="classe" class="form-control" required data-validation-required-message="Preencha a Classe" value="<?=$classe;?>">
						</div>	
					</div>	

					<div class="control-group">
						<label for="valor">Valor:</label>
						<div class="controls">
							<input type="text" name="valor" class="form-control" required data-validation-required-message="Informe o Valor" value="<?=$valor;?>">
						</div>
					</div>
				
					<button type="submit" class="btn btn-default">
						<i class="glyphicon glyphicon-floppy-save"></i> Cadastrar
					</button>

				</fieldset>
			</form>

		</div>
	</div>	

</body>
</html>