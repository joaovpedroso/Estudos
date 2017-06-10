<?php
	include "bloqueio.php";
?>
<div class="col-md-12">
			<?php

				$id = $_GET["id"];
				$op = $_GET["op"];
				$tipo = $_GET["tipo"];	

			?>
					
			
			<div class="row">
				<div class='col-md-6'>
					<h4>Obs.</h4>
					<p style="color:red"><b>Preencha apenas os campos que deseja alterar</b></p>
				</div>
			</div>	

			<?php
			echo "
			<form name='cadastrocliente' method='post' action='inicial.php?pg=operacoes&op=1&tipo=$tipo&id=$id'>
				<div class='for-group'>
					<label for='id'>ID:</label>
					<input type='text' name='id' value='$id' class='form-control' disabled>
				</div>";
			?>
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

				<button type="submit" name="cadastrar" class="btn btn-success">Alterar Dados</button>

			</form>
		</div>	
	</div>	
</div>