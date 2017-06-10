<?php
	include "bloqueio.php";
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
$(function(){
	$("#addProd").click(function(){
		var novoItem = $("#produto").clone().removeAttr('id');
		 $("#produto").children('input').val('');
		$("#venda").append(novoItem);
	});
});
</script>

<div class="container">
	<h2 style="text-align: center">Registro de Saidas</h2>

	<div class="container">
		<form name="venda" id="venda" action="inicial.php?pg=venda" method="post">
			<button type="button" class="btn" id="addProd">Adicionar Produto</button>
			<button type="submit" name="venda" class="btn">Finalizar Venda</button>
			
			<div class="form-group">
				<label>Cliente:</label>
				<select class="form-control" name="cliente">
					<?php
						$sql = "SELECT * FROM clientes where id_status='1' order by nome";
								$resultado = mysqli_query($con, $sql);

								while ($dados = mysqli_fetch_array($resultado)) {
									$id = $dados["id"];
									$nome = $dados["nome"];

									echo "<option value='$id' class='from-control'>$nome</option>";
								}
					?>
				</select>
			</div>

			<div class="container" id="produto">
				<!-- <table class="table table-striped table-bordered" id="pedido"> -->
				<div name="produto">
					<div class="form-group">
						<div class="col-md-8">
							<label>Selecione o Produto</label>
							<select name="idProduto[]" class="form-control">
								<option>1</option>
							</select>
						</div>	
						
						<div class="col-md-1">
							<label>Quantidade</label>
							<input type="number" name="quantidade[]" class="form-control">
						</div>	

						<div class="col-md-2">
							<label>Valor Un.</label>
							<?php
								$sql = "SELECT valor FROM produtos WHERE id='2' ";
								$resultado = mysqli_query($con, $sql);
								$dados = mysqli_fetch_array($resultado);
									$valor = $dados["valor"];
									echo "<input type='text' name='valorUn[]' value='R$ $valor' disabled class='form-control'>";
							?>
						</div>
					</div>
				</div>

			</div>
		</form>
	</div>

</div>	