<!DOCTYPE html>
<html>
<head>
	<title>PHP com PDO</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Busca de Clientes</h1>

	<form name="form1" method="post"
	action="cidade.php">
		<label for="busca">
			Busca:
		</label>
		<input type="text" 
		name="busca" size="30">
		<button type="submit">
			LOL
		</button>
	</form>

	<h2>Resultado da Busca:</h2>
	<table width="100%" border="1">
		<tr>
			<td>Nome</td>
			<td>Curso</td>
			<td>Cidade</td>
			<td>Idade</td>
		</tr>
		<?php
			//incluir o conecta
			include "conecta.php";
			//se foi post
			if ($_POST) {

				//recuperar a busca
				$busca = 
				trim($_POST["busca"]);

				$sql = "select * from cliente where cidade like 
					'%$busca%' 
					order by nome";
				$consulta = $con->prepare($sql);
				$consulta->execute();


while ( $linha = 
	$consulta->fetch(PDO::FETCH_OBJ)) {

				$nome = $linha->nome;
				$curso = $linha->curso;
				$idade = $linha->idade;
				$cidade = $linha->cidade;

				echo "<tr>
					<td>$nome</td>
					<td>$curso</td>
					<td>$cidade</td>
					<td>$idade</td>
				</tr>";


				}

			}

		?>
	</table>

</body>
</html>