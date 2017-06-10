<!DOCTYPE html>
<html>
<head>
	<title>Busca por Idade</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Busca por Idade</h1>

	<form name="form1" method="post">
		<label>Idade Inicial:</label>
		<input type="text" name="idadeinicial"
		size="10">
		<label>Idade Final:</label>
		<input type="text" name="idadefinal"
		size="10">
		<button type="submit">OK</button>
	</form>

	<h2>Resultado:</h2>
	<table width="100%" border="1">
		<tr>
			<td>Nome</td>
			<td>Idade</td>
		</tr>
		<?php
			if ($_POST) {
				//idade inicial
				$idadeinicial = 
				trim($_POST["idadeinicial"]);
				//idade final
				$idadefinal = 
				trim($_POST["idadefinal"]);

				include "conecta.php";

				$sql = "select * from cliente
					where
			idade >= ".(int)$idadeinicial."
			and
			idade <= ".(int)$idadefinal."
					order by idade";

				$consulta = $con->prepare($sql);
				$consulta->execute();


while ( $linha = 
	$consulta->fetch(PDO::FETCH_OBJ)) {

				$nome = $linha->nome;
				$idade = $linha->idade;

				echo "<tr>
					<td>$nome</td>
					<td>$curso</td>
					<td>$cidade</td>
					<td>$idade</td>
				</tr>";


				}

			}


			}
		?>
	</table>

</body>
</html>