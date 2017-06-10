<?php
	include "bloqueio.php";
?>
<?php

	$id = $_GET["id"];
	if (isset($_GET["tipo"])){
            $tipo = trim($_GET["tipo"]);
          }else{
          	$tipo = "";
          }

	if($tipo == "cliente" or $tipo == ""){
		$sql = "SELECT * FROM clientes WHERE id = ".(int)$id;
	$resultado = mysqli_query($con, $sql);
	$dados = mysqli_fetch_array($resultado);
		$id = $dados["id"];
		$nome = $dados["nome"];
		$telefone = $dados["telefone"];
		$email = $dados["email"];
		$endereco = $dados["endereco"];
		$cidade = $dados["cidade"];
		$bairro = $dados["bairro"];
		$rg = $dados["rg"];
		$cpf = $dados["cpf"];
		$datanascimento = $dados["datanascimento"];
		$foto = $dados["foto"];
		$id_status = $dados["id_status"];
			if($id_status == 1 ){
				$status = "Ativo";
			}else if($id_status == 0 ){
				$status = "Inativo";
			}


		echo "<div class='container'>
					<div class='panel panel-default'>
							
							<div class='panel-heading'></a>
								<div class='row'>
								<div class='col-md-5'>	
									<a href='#'><b>$nome</b></a>
								</div>
								<div class='col-md-4'>
									<p style='color: red'>Status: $status </p>
								</div>

								<div class='col-md-3 link'>
										<a href='inicial.php?pg=edicao&id=$id&op=1&tipo=cliente'>
											<button type='submit' name='alterar' class='btn btn-success'>Alterar</button>
										</a>

										<a href='inicial.php?pg=operacoes&id=$id&op=3&tipo=cliente'>
											<button type='submit' name='ativar' class='btn btn-warning'>Ativar</button>
										</a>

										<a href='inicial.php?pg=operacoes&id=$id&op=2&tipo=cliente'>
											<button type='submit' name='deletar' class='btn btn-danger'>Deletar</button>
										</a>	
								</div>
								</div>	
							</div>	
								<div class='row'>
									<div class='col-md-9'>
										<img src='imagens/$foto' class='fotocliente' alt='Foto' title='Foto'>	
									</div>
								</div>
								<table class='table'>	
							  		<ul class='list-group'>
							  			<div class='row'>
							  				<div class='col-md-6'>
										  		<li class='list-group-item'>RG: $rg<br></li>
									  		</div>
									  		<div class='col-md-6'>
									  			<li class='list-group-item'>CPF: $cpf<br></li>
									  		</div>
								  		</div>
										<div class='row'>
											<div class='col-md-6'>
										  		<li class='list-group-item'>Data de Nascimento: $datanascimento<br></li>
										  	</div>
										  	<div class='col-md-6'>
										  		<li class='list-group-item'>Telefone: $telefone<br></li>
										  	</div>	
										</div> 
										<div class='row'>
											<div class='col-md-6'>  	
										  		<li class='list-group-item'>Email: $email</br></li>
										  	</div>
										  	<div class='col-md-6'>	
										  		<li class='list-group-item'>Endereco: $endereco<br></li>
										  	</div>	
										</div> 
										<div class='row'>
											<div class='col-md-6'>  	
										  		<li class='list-group-item'>Cidade: $cidade</br></li>
										  	</div>
										  	<div class='col-md-6'>	
										  		<li class='list-group-item'>Bairro: $bairro<br></br></li>
										  	</div>
										</div> 		
							  		</ul>
								</table> 	
					  	</div>
				 </div>

				<div class='container'>
					<div class='panel panel-default'>
						<div class='panel-heading'><a href='inicial.php?pg=historico&id=$id'><b>Historico De Compras:</b></a></div> 
			  		</div>

			  		<a href='inicial.php?pg=clientes'><button class='btn btn-success'>Voltar a Pagina Anterior</button></a>

				</div>";



		}else if ($tipo == "produto") {
			$sql = "SELECT * FROM  produtos WHERE id = $id";
			$resultado = mysqli_query($con, $sql);
			while($dados = mysqli_fetch_array($resultado)){
				$id = $dados["id"];
				$nome = $dados["nome"];
				$valor = $dados["valor"];
				$descricao = $dados["descricao"];
				$categoria_id = $dados["categoria_id"];
				$estoque = $dados["quantidade"];

					$sql_categoria = "SELECT marca FROM categoria WHERE id = $categoria_id";
					$resultado_categoria = mysqli_query($con, $sql_categoria);
					$dados_categoria = mysqli_fetch_array($resultado_categoria);
						$categoria = $dados_categoria["marca"];
						
						$sql_data_compra = "SELECT data_compra FROM produtos WHERE id= $id";
						$resultado_data_compra = mysqli_query($con, $sql_data_compra);
						$dados_data_compra = mysqli_fetch_array($resultado_data_compra);
							$data_compra = $dados_data_compra['data_compra'];
			}

			echo" <div class='container'>
					<div class='panel panel-default'>	
						<div class='panel-heading'></a>
							<div class='row'>
								<div class='col-md-5'>	
									<a href='#'><b>$nome</b></a>
								</div> 
							</div>	
						</div>	
							<table class='table'>	
							  		<ul class='list-group'>
							  			<div class='row'>
							  				<div class='col-md-3'>
										  		<li class='list-group-item'>Valor: R$.$valor<br></li>
									  		</div>
									  		<div class='col-md-3'>
										  		<li class='list-group-item'>Estoque: $estoque<br></li>
									  		</div>
									  		<div class='col-md-6'>
									  			<li class='list-group-item'>Marca / Distribuidora: $categoria<br></li>
									  		</div>
									  		
								  		</div>
										<div class='row'>
											<div class='col-md-6'>
										  		<li class='list-group-item'>Descricao: $descricao<br></li>
										  	</div>	
										  	<div class='col-md-4'>
									  			<li class='list-group-item'>Data da Compra: $data_compra<br></li>
									  		</div>
										</div> 	
							  		</ul>
								</table> 	
					  	</div>
				 </div>

				 <a href='inicial.php?pg=produtos&tipo=produtos'><button class='btn btn-success'>Voltar a Pagina Anterior</button></a>";
		}else if ($tipo == "servico"){
			$sql = "SELECT * FROM servicos WHERE id = $id";
			$resultado = mysqli_query($con, $sql);
			while($dados = mysqli_fetch_array($resultado)){
				$id = $dados["id"];
				$nome = $dados["nome"];
				$descricao = $dados["descricao"];
				$valor = $dados["valor"];
			}

			echo "<div class='container'>
					<div class='panel panel-default'>	
						<div class='panel-heading'></a>
							<div class='row'>
								<div class='col-md-5'>	
									<a href='#'><b>$nome</b></a>
								</div> 
							</div>	
						</div>	
							<table class='table'>	
							  		<ul class='list-group'>
							  			<div class='row'>
							  				<div class='col-md-6'>
										  		<li class='list-group-item'>Valor: R$.$valor<br></li>
									  		</div>
								  		</div>
										<div class='row'>
											<div class='col-md-6'>
										  		<li class='list-group-item'>Descricao: $descricao<br></li>
										  	</div>	
										</div> 	
							  		</ul>
								</table> 	
					  	</div>
				 </div>
			<a href='inicial.php?pg=servicos'><button class='btn btn-success'>Voltar a Pagina Anterior</button></a>";
		}else if ($tipo == "usuario") {
			$sql = "SELECT * FROM usuarios WHERE id = ".(int)$id;
			$resultado = mysqli_query($con, $sql);
			$dados = mysqli_fetch_array($resultado);
				$usuario = $dados["usuario"];
				$senha = $dados["senha"];
				$nome = $dados["nome"];
				$email = $dados["email"];
				$datanascimento = $dados["datanascimento"];
				$id_status = $dados["id_status"];
				if($id_status == 1 ){
					$status = "Ativo";
				}else if($id_status == 0 ){
					$status = "Inativo";
				}


				//Vai dentro do ECHO esta linha na <div class='col-md-3 link>'>
				//<a href='inicial.php?pg=edicao&id=$id&op=1&tipo=usuario'>
				//	<button type='submit' name='alterar' class='btn btn-success'>Alterar</button>
				//</a>
				echo "<div class='container'>
					<div class='panel panel-default'>
							
							<div class='panel-heading'></a>
								<div class='row'>
								<div class='col-md-5'>	
									<a href='#'><b>$nome</b></a>
								</div>
								<div class='col-md-4'>
									<p style='color: red'>Status: $status </p>
								</div>

								<div class='col-md-3 link'>
										

										<a href='inicial.php?pg=operacoes&id=$id&op=3&tipo=usuario'>
											<button type='submit' name='ativar' class='btn btn-warning'>Ativar</button>
										</a>

										<a href='inicial.php?pg=operacoes&id=$id&op=2&tipo=usuario'>
											<button type='submit' name='deletar' class='btn btn-danger'>Deletar</button>
										</a>	
								</div>
								</div>	
							</div>	
								<div class='row'>
									<div class='col-md-9'>
										<img src='imagens/usuario.png' class='fotocliente' alt='Foto' title='Foto'>	
									</div>
								</div>
								<table class='table'>	
							  		<ul class='list-group'>
							  			<div class='row'>
							  				<div class='col-md-6'>
							  					<li class='list-group-item'>Usuario: $usuario<br></li>
							  				</div>
											<div class='col-md-6'>
										  		<li class='list-group-item'>Data de Nascimento: $datanascimento<br></li>
										  	</div>	
										</div> 
										<div class='row'>
											<div class='col-md-6'>  	
										  		<li class='list-group-item'>Email: $email</br></li>
										  	</div>
										</div> 
										
							  		</ul>
								</table> 	
					  	</div>
				 </div>

				<div class='container'>
					<div class='panel panel-default'>
						<div class='panel-heading'><a href='inicial.php?pg=historico&id=$id'><b>Historico De Compras:</b></a></div> 
			  		</div>

			  		<a href='inicial.php?pg=clientes'><button class='btn btn-success'>Voltar a Pagina Anterior</button></a>

				</div>";
		}
	?>