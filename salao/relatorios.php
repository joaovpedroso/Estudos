<?php
	include "bloqueio.php";
?>
<h2 style='text-align: center'>Relatorios</h2>

<form name="relatorio" action="inicial.php?pg=gerarelat" method="post">

	<div class="row">
		<div class="col-md-1">
			<label>Dia</label>
			<input type="number" name="dia" class="form-control" maxlength="2">
		</div>

		<div class="col-md-1">
			<label>Mes</label>
			<input type="number" name="mes" class="form-control" maxlength="2">
		</div>

		<div class="col-md-2">
			<label>Ano</label>
			<input type="number" name="ano" class="form-control" maxlength="4">
		</div>
	</div>
	<br>
		<div class="form-group">
			<label for="tipo">Entrada</label>
			<input type="radio" name="tipo" value="entrada">

			<label for="tipo">Saida</label>
			<input type="radio" name="tipo" value="saida">
		</div>

		<button class="btn" type="submit">Gerar</button>
</form>
