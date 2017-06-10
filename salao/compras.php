<?php
	include "bloqueio.php";
?>
<div class="container">
	<h2 style='text-align: center'>Entrada de Produtos</h2>
	<div class="col-md-12">
		<div class="container">
			<div class="container">
				<a href="inicial.php?pg=cadastromarca"><button class="btn btn-success">Cadastrar Marca</button></a><br></br>
			</div>
			<form name="entrada" action="inicial.php?pg=entradas" method="post">
				<div class="container">
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label>Cadastro Novo de:</label>
								<select class="form-control" name="tipo">
									<option value="produto">Produto</option>
									<option value="servico">Servico</option>
								</select>
							</div>
						</div>
					</div>
					<hr></hr>
				</div>	

				<div class="form-group">
					<div class="col-md-11">
						<label for='nomeProduto'>Nome</label>
						<input type="text" name="nomeProduto" class="form-control" maxlength="80" placeholder="Nome Do Produto / Servico">
					</div>
				</div><br></br><br></br>


				
				<div class="col-md-3">	
					<div class="form-group">

						<label>Marca: (Se For Produto)</label>
						<select name="marcas" class="form-control">
							<?php
								$sql = "SELECT id,marca FROM categoria order by id";
								$resultado = mysqli_query($con, $sql);

								while ($dados = mysqli_fetch_array($resultado)) {
									$id = $dados["id"];
									$marca = $dados["marca"];

									echo "<option value='$id' class='from-control'>$id - $marca</option>";
								}
							?>
						</select>
					</div>	
				</div>
					
				<div class="col-md-4">
					<div class="form-group">
						<label>Valor:</label>
						<input type="float" name="valor" placeholder="Valor R$:" class="form-control">
					</div>	
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Quantidade (Se For Produto)</label>
						<input type="number" name="quantidade" placeholder="Quantidade:" class="form-control">
					</div>	
				</div>
				<div class="col-md-9">
					<div class="form-group">
						<label>Descrição</label>
						<textarea class="form-control" maxlength="255" name="descricao" placeholder="Descrição do Produto / Serviço"></textarea>
					</div>	
				</div>
				
				<div class="col-md-4">
						<button type="submit" name="entrada" class="btn btn-success">Cadastrar Entrada</button>
				</div>
					
			</form>	
		</div>	
	</div>	
</div>	