<?php
	//Inclusão do menu
	include "menu.php";

	$id = "";

	//Verificação para saber se vai editar ou criar um novo cadastro de filme
	if ( isset( $_GET['id'] )  ) {
		$id = trim( $_GET['id'] );
		$titulo = $original = $ano = $imagem = $sinopse = $classe_id = $categoria_id = $ativo = "";
	}
	else {
		$id = $titulo = $original = $ano = $imagem = $sinopse = $classe_id = $categoria_id = $ativo = "";
	}

?>
<div class="container">
	<div class="well">
		<h1>Cadastro de Filmes</h1>

		<a href="filme.php" class="btn btn-success pull-right">
			<i class="glyphicon glyphicon-file"></i>
			Novo Cadastro
		</a>	

		<a href="listarFilme.php" class="btn btn-primary pull-right">
			<i class="glyphicon glyphicon-search"></i>
			Listar Cadastros
		</a>

		<div class="clearfix"></div>

		<form name="form1" method="post" action="salvarFilme.php" enctype="multipart/form-data" novalidate>
			
			<div class="control-group">
				<label for="id">ID</label>
				<div class="controls">
					<input type="text" name="id" class="form-control" value="<?=$id;?>" readonly>
				</div>	
			</div>

			<div class="control-group">
				<label for="titulo">Título do Filme</label>
				<div class="controls">
					<input type="text" name="titulo" class="form-control" value="<?=$titulo;?>" required data-validation-required-message="Preencha o Título do Filme">
				</div>	
			</div>

			<div class="control-group">
				<label for="original">Título Original:</label>
				<div class="controls">
					<input type="text" name="original" class="form-control" value="<?=$original;?>" required data-validation-required-message="Preencha o Título Original do Filme ">
				</div>	
			</div>

			<div class="control-group">
				<label for="ano">Ano:</label>
				<div class="controls">
					<input type="text" name="ano" class="form-control" value="<?=$ano;?>" required data-validation-required-message="Preencha o Ano do Filme" data-mask="9999">
				</div>
			</div>

			<div class="control-group">
				<label for="sinopse">Sinopse:</label>
				<div class="controls">
					<textarea name="sinopse" 
					class="form-control" 
					required 
					data-validation-required-message="Preencha a Sinopse" 
					rows="5"></textarea>
				</div>
			</div>

			<div class="control-group">
				<label for="imagem">Imagem (Foto JPG)</label>
				<div class="controls">
					<input type="file" name="imagem" class="form-control" required data-validation-required-message="Selecione uma foto">
				</div>
			</div>
			
			<div class="control-gropup">
				<label for="ativo">Ativo</label>
				<div class="controls">
					<input type="radio" name="ativo" value="sim" required data-validation-required-message="Selecione uma Opção" checked>Sim
					<input type="radio" name="ativo" value="nao" required data-validation-required-message="Selecione uma Opção">Não
				</div>
			</div>

			<div class="control-group">
				<label for="classe_id">Selecione a Classe</label>
				<div class="controls">
					<select name="classe_id" class="form-control" required data-validation-required-message="Selecione uma classe">
						<option value="">Selecione uma classe</option>
						<?php
							//Selecionar todas as classes
							$sql = "SELECT * FROM classe ORDER BY classe";
							$consulta = $pdo->prepare($sql);
							$consulta->execute();

							while ($dados = $consulta->fetch(PDO::FETCH_OBJ)){
								$id = $dados->id;
								$classe = $dados->classe;
								echo "<option value='$id'>$classe</option>";
							}
						?>
					</select>
				</div>
			</div>

			<div class="control-group">
				<label for="categoria_id">Selecione a Categoria</label>
				<div class="controls">
					<select name="categoria_id" class="form-control" required data-validation-required-message="Selecione uma Categoria">
						<option value="">Selecione uma Categoria</option>
						<?php
							$sql = "SELECT * FROM categoria ORDER BY categoria";
							$consulta = $pdo->prepare($sql);
							$consulta->execute();

							while($dados = $consulta->fetch(PDO::FETCH_OBJ)){
								$id = $dados->id;
								$categoria = $dados->categoria;

								echo "<option value='$id'>$categoria</option>";
							}
						?>
					</select>
				</div>
			</div>

			<button type="submit" class="btn btn-default">Gravar Dados</button>
		</form>

	</div>
</div>

</html>
</body>