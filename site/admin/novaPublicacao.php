<?php
  include "menu.php";


  if ( isset ( $_GET['id'] ) ) {

  	$id = trim( $_GET['id'] );

  	$sql = "SELECT titulo, subtitulo,conteudo, capa FROM publicacoes WHERE id = ? LIMIT 1";
  	$consulta = $pdo->prepare($sql);
  	$consulta->bindParam(1, $id);
  	$consulta->execute();

  	$dados = $consulta->fetch(PDO::FETCH_OBJ);
  		$titulo = $dados->titulo;
  		$subtitulo = $dados->subtitulo;
  		$conteudo = $dados->conteudo;
  		$imagem = $dados->capa;

  }else {
  	$id = $titulo = $subtitulo = $conteudo = $imagem = "";
  }


?>

	<div class="container">
	<a href="publicacoes.php"><button class="btn btn-default pull-right">Ver Publicações</button></a>
		<h4>Nova Publicacao</h4>
		<div class="col-md-11">
			<form name="novaPublicacao" method="post" action="cadastrarPublicacao.php" enctype="multipart/form-data">	
				<label>Id:</label>
				<input type="text" name="id" value="<?=$id?>" readonly class="form-control">
				

				<label for="titulo">Titulo:</label>
				<input type="text" name="titulo" placeholder="Titulo" class="form-control"  required maxlength="24" value="<?=$titulo?>">
			
				<label for="subtitulo">Sub-Titulo:</label>
				<input type="text" name="subtitulo" placeholder="Sub Titulo" class="form-control"  required maxlength="24" value="<?=$subtitulo?>">
			
				<label for="conteudo">Conteudo:</label>
				<textarea name="conteudo" placeholder="Texto"  class="form-control" required>
					<?=$conteudo?>
				</textarea>

				<label for="imagem">Imagem:</label>
				<input type="file" name="imagem" class="form-control" required  value="<?=$imagem?>">
				<hr>
				<button type="submit" class="btn btn-default">Cadastrar</button>
				<button type="reset" class="btn btn-danger">Limpar Campos</button>
			</form>	
		</div>
	</div>	
</body>	