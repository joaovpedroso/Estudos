<?php
	include "menu.php";
?>
<div class="well container">
	<h1>Lista de Filmes</h1>

	<a href="filme.php" title="Cadastro de Filme" class="btn btn-success pull-right">
		<i class="glyphicon glyphicon-file"></i>
		 Novo Cadastro
	</a>
	
	<div class="clearfix"></div>

	<form name="formpesquisa" method="get" class="form-inline text-center">
		<label for="palavra">Palavra-Chave
			<input type="text" name="palavra" required placeholder="Digite uma palavra" class="form-control">
		</label>

		<button type="submit" class="btn btn-success">
			<i class="glyphicon glyphicon-search"></i>
		</button>
	</form>

	<?php
		//Iniciar a vaiavel de pesquisa Palavra
		$palavra = "";

		//Se for pesquisado algo
		if ( isset( $_GET['palavra'] ) ){
			$palavra = trim( $_GET['palavra'] );
		}
		//SQL para BUSCA
		$sql = "SELECT f.id, f.titulo, f.ano, f.imagem, c.classe, c.valor, ca.categoria FROM filme f 
		INNER JOIN classe c ON ( c.id = f.classe_id ) 
		INNER JOIN categoria ca ON ( ca.id = f.categoria_id ) WHERE f.titulo like ? ORDER BY f.titulo  ";
		$palavra = "$palavra%";
		$consulta = $pdo->prepare( $sql );
		$consulta->bindParam( 1, $palavra );
		$consulta->execute();
	?>
	<table class="table table-bordered table-stripped table-hover table-responsive">
		<thead>
			<tr>
				<td width="10%">ID</td>
				<td>Capa</td>
				<td>Nome do Filme</td>
				<td>Categoria</td>
				<td>Classe</td>
				<td>Valor</td>
				<td width="15%">Opções</td>
			</tr>
		</thead>
		
		<?php
			while( $dados = $consulta->fetch( PDO::FETCH_OBJ ) ) {
				$id = $dados->id;
				$imagem = $dados->imagem;
				$titulo = $dados->titulo;
				$classe = $dados->classe;
				$categoria = $dados->categoria;
				$valor = $dados->valor;

				//Maskara de Dinheiro
				$valor = number_format( $valor, 2, ",", "." );

				$imagem = $imagem."p.jpg";
				$img = "<img src='../fotos/$imagem' width='100'>";

				echo " <tr> 
						<td>$id</td>
					  	<td>$img</td>
					  	<td>$titulo</td>
					  	<td>$categoria</td>
					  	<td>$classe</td>
					  	<td>R$ $valor</td>
					  	<td>
					  		<a href='filme.php?id=$id' class='btn btn-primary'>
					  			<i class='glyphicon glyphicon-pencil'></i>
					  		</a>

					  		<a href='javascript:deletar($id)' class='btn btn-danger'>
					  			<i class='glyphicon glyphicon-erase'></i>
					  		</a>

					  	</td>
					  </tr>";
			}
		?>
	</table>
</div>

	<script type="text/javascript">
	 
	 //Funcao para perguntar se deseja deletar
		function deletar(id){
			if ( confirm("Deseja realmente excluir ?") ){
				//enviar o id para uma pagina se desejar excluir
				location.href = "excluirfilme.php?id="+id;
			}
		};

	</script>
