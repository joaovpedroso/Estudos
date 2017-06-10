<?php
  include "menu.php";
?>
	<div class="container">
		<h3>Publicações: </h3>
		<a href='novaPublicacao.php'><button class="btn btn-default">Adicionar Publicacao</button></a><hr>
		<table class="table table-responsive table-bordered table-striped table-hover" style="text-align: center; width:100%;">
			<tr style="text-align: center; color: red;">
					<td class="negrito">ID</td>
					<td class="negrito">TITULO</td>
					<td class="negrito">DATA DA CRIAÇÃO</td>
					<td class="negrito">CONTROLE</td>
			</tr>	
			<?php
				include "../config/conecta.php";
				$sql = "SELECT * FROM publicacoes ORDER BY data";
				$consulta = $pdo->prepare($sql);
				$consulta->execute();
				while($dados = $consulta->fetch(PDO::FETCH_OBJ)){
					$id = $dados->id;
					$titulo = $dados->titulo;
					$data = $dados->data;

					echo "<tr>
						      <td class='negrito'> $id </td>
						      <td> $titulo </td>
						      <td> $data</td>
						      
						      <td>
						      	<a href='novaPublicacao.php?id=$id'><button class='btn negrito'>Editar</button></a>
						      	<a href='excluirPublicacao.php?id=$id'><button class='btn btn-danger negrito'>Excluir</button></a>
						      </td>	
						  </tr>";
				}
			?>
		</table>
	</div>	

</body>