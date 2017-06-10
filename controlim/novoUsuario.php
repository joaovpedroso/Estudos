<h2 class="titulo">Novo Usuario</h2>

<form  action="inicial.php?pg=cadUsuario" method="POST" name="cadastrarvenda">
	
	<div class="container">
		<div class="form-group col-md-12">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" maxlength="80" placeholder="Maximo 50 Caracteres">
		</div>

		<div class="form-group col-md-12">
			<label>Email</label>
			<input type="email" name="email" class="form-control" maxlength="50" placeholder="Maximo 50 Caracteres">
		</div>

		<div class="form-group col-md-2">
			<label>Data de Nascimento</label>
			<input type="date" name="datanascimento" class="form-control">
		</div>

		<div class="form-group col-md-4">
			<label>Usuario</label>
			<input type="text" name="usuario" class="form-control" placeholder="Maximo 20 Caracteres" maxlength="20">
		</div>

		<div class="form-group col-md-4">
			<label>Senha</label>
			<input type="text" name="senha" class="form-control" placeholder="Maximo 15 Caracteres" maxlength="15">
		</div>

		<div class="clear"></div>

		<button type="submit" class="btn col-md-2">Registrar
	</div>
</form>