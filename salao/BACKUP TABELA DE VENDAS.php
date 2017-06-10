<?php
	include "bloqueio.php";
?>
<script>
	(function($) {

		RemoveTableRow = function(handler) {
			var tr = $(handler).closest('tr');

			tr.fadeOut(400, function(){ 
			  tr.remove(); 
			}); 

			return false;
		};

	})(jQuery);

	(function($) {
	  	AddTableRow = function() {

		    var newRow = $("<tr>");
		    var cols = "";

		    cols += '<td>&nbsp;</td>';
		    cols += '<td>&nbsp;</td>';
		    cols += '<td>&nbsp;</td>';
		    cols += '<td>&nbsp;</td>';
		    cols += '<td>&nbsp;</td>';
		    cols += '<td>';
		    cols += '<button onclick="RemoveTableRow(this)" type="button" class="btn">Remover</button>';
		    cols += '</td>';

		    newRow.append(cols);
		    $("#pedido").append(newRow);

		    return false;
		};
	})(jQuery);

</script>

<div class="container">
	<h2 style="text-align: center">Registro de Saidas</h2>

	<div class="container">
		<form name="venda" action="inicial.php?pg=venda" method="post">
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

			<div class="container">
				<table class="table table-striped table-bordered" id="pedido">
					<trbody>
						<tr>
							<th>Codigo</th>
							<th>Produto</th>
							<th>Quantidade</th>
							<th>Valor Un</th>
							<th>Subtotal</th>
							<th></th>
						</tr>
						<td>CDG&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>
							<button onclick="RemoveTableRow(this)" type="button" class="btn">Remover</button>
						</td>
					</trbody>
					<tfoot>
						<tr>
							<td colspan="5" style="text-align: left;">
								<button onclick="AddTableRow()" type="button" class="btn">Adicionar Produto</button>
							</td>
						</tr>
					</tfoot>
				</table>
			</div>

			<button type="submit" name="venda" class="btn">Finalizar Venda</button>
		</form>
	</div>

</div>	