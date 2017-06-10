<?php
	include "bloqueio.php";
?>
<div class="container">
	<div class="container">
	<h2>Cadastro de Cliente</h2>
		<div class="col-md-12">
			<form name="cadastrocliente" action="inicial.php?pg=cadastrar" method="post" >
				<div class="form-group">
					<label>Nome:</label>
					<input type="text" id="nome" name="nome" placeholder="Nome:" class="form-control" maxlength="80">
				</div>

				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Data de Nascimento:</label>
							<input type="date" id="datanascimento" name="datanascimento" class="form-control" maxlength="8">
						</div>
					</div>
					<div class="col-md-4">
						<label>RG:</label>
						<input type="number" id="rg" name="rg" class="form-control" maxlength="11">
					</div>

					<div class="col-md-4">
						<label>CPF:</label>
						<input type="number" id="cpf" name="cpf" class="form-control" maxlength="12">
					</div>

				</div>

				<div class="form-group">
					<label>Email:</label>
					<input type="email" id="email" name="email" placeholder="Email:" class="form-control" maxlength="80">
				</div>

				<div class="form-group">
					<label>Telefone:</label>
					<input type="number" id="telefone" name="telefone" placeholder="Telefone:" class="form-control" maxlength="12">
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label>Endereço:</label>
							<input type="text" id="endereco" name="endereco" placeholder="Endereco:" class="form-control" maxlength="80">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Bairro:</label>
							<input type="text" id="bairro" name="bairro" placeholder="Bairro:" class="form-control" maxlength="45">
						</div>
					</div>

					<div class="col-sm-6">	
						<div class="form-group">
							<label>Cidade:</label>
							<input type="text" id="cidade" name="cidade" placeholder="Cidade:" class="form-control" maxlength="45">
						</div>
					</div>	
				</div>

				<button type="submit" name="cadastrar" class="btn btn-success">Cadastrar Cliente</button>

			</form>
		</div>	
	</div>	
</div>