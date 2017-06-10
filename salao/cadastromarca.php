<?php
	include "bloqueio.php";
?>

<div class="container">
	<h2 style='text-align: center'>Cadastro de Marcas</h2>
	<div class="col-md-12">
		<div class="container">
			<form name="cadastromarca" action="inicial.php?pg=cadastrarmarca" method="post">		
				<div class="col-sm-10">	
					<div class="form-group">
						<input type="text" name="marca" placeholder="Marca" class="form-control" maxlength="80">
					</div>
				</div>	

				<div class="col-sm-10">	
					<div class="form-group">
						<input type="text" name="telefone" placeholder="Telefone" class="form-control" maxlength="20">
					</div>
				</div>

				<div class="col-sm-10">	
					<div class="form-group">
						<input type="text" name="endereco" placeholder="Endereço" class="form-control" maxlength="80">
					</div>
				</div>

				<div class="col-sm-5">	
					<div class="form-group">
						<input type="text" name="cidade" placeholder="Cidade" class="form-control" maxlength="30">
					</div>
				</div>

				<div class="col-sm-5">	
					<div class="form-group">
						<input type="text" name="estado" placeholder="Estado" class="form-control" maxlength="20">
					</div>
				</div>
				<div class="row container">
					<div class="col-md-3">	
						<div class="form-group">
							<button type="submit" name="cadastro" class="btn btn-primary">Cadastrar Marca</button>
						</div>
					</div>
				
			</form>
				<div class="col-md-2">
						<a href="inicial.php?pg=compras"><button class="btn btn-primary">Voltar</button></a>
					</div>
			</div>
			
		</div>
	</div>	
</div>	