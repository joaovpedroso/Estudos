<h2 class="titulo">Nova Compra</h2>

<form  action="inicial.php?pg=cadastrar" method="POST" name="cadastrarcompra">
	
	<div class="container">
		<div class="form-group col-md-2">
			<label>Data da Compra</label>
			<input type="date" name="datacompra" class="form-control">
		</div>

		<div class="form-group col-md-2">
			<label>Valor da Compra</label>
			<input type="text" name="valor" class="form-control">
		</div>

		<div class="form-group col-md-12">
			<label>Produtos</label>
			<textarea name="produtos" placeholder="Descreva aqui os produtos comprados" class="form-control"></textarea>
		</div>


		<button type="submit" class="btn col-md-2">Registrar
	</div>
</form>