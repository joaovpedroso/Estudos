<?php
  include "menu.php";

  if ( isset( $_GET['id'] ) ){
  	$id = trim( $_GET['id'] );

  	$sql = "SELECT titulo FROM galeria WHERE id = ? LIMIT 1";
  	$consulta = $pdo->prepare($sql);
  	$consulta->bindParam(1, $id);
  	$consulta->execute();
  	$dados = $consulta->fetch(PDO::FETCH_OBJ);
  		$titulo = $dados->titulo;

  }else {
  	$id = $titulo = "";
  }

?>

	<div class="container">
	<a href="galerias.php"><button class="btn btn-default pull-right">Ver Galerias</button></a>
		<h4>Nova Galeria</h4>
		<div class="col-md-11">
			<form name="novaGaleria" method="post" action="cadastrarGaleria.php" enctype="multipart/form-data">	
				<label for="id">ID:</label>
				<input type="text" name="id" readonly value="<?=$id?>" class="form-control">

				<label for="titulo">Titulo:</label>
				<input type="text" name="titulo" placeholder="Titulo" class="form-control"  required maxlength="24" value="<?=$titulo?>">
				
				<div class='row col-md-6'>
					<label for='imagem'>Imagem</label>
				  	<input type='file' name='imagem[]' multiple class='form-control'>
			   </div>
				
				
				<div class="row col-md-12"><br>
					<button type="submit" name="cadastrar" class="btn btn-default">Cadastrar</button>
					<button type="reset" class="btn btn-danger">Limpar Campos</button>
				</div>	
			</form>	
		</div>
	</div>	
</body>	