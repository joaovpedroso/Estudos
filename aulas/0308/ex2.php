<!DOCTYPE html>
<html>
<head>
	<title>Formulário 2</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Formulário 2</h1>
	<?php
		//se foi POST
		if ($_POST) {

			$fone = $data = $sexo = $civil = 
			$cidade = $estado = $msg = "";

			//trim retira espaços em branco
			if (isset($_POST["fone"])) {
				$fone = trim($_POST["fone"]);
			}

			if (isset($_POST["data"])) {
				$data = trim($_POST["data"]);
			}

			if (isset($_POST["sexo"])) {
				$sexo = trim($_POST["sexo"]);
			}

			$civil = trim($_POST["civil"]);
			$cidade = trim($_POST["cidade"]);
			$estado = trim($_POST["estado"]);
			$msg = trim($_POST["msg"]);

			//verificar se esta vazio
			if(empty($fone)) {
				echo "O fone esta em branco";
			}
			else if (empty($cidade)) {
				echo "A cidade esta em 
				branco";
			}
			else if (empty($msg)) {
				echo "A mensagem está em branco";
			} else {
				//mostrar os dados digitados
				echo "<h2>
						Dados Digitados
					</h2>
					<p>Fone: $fone<br>
					Data: $data <br>
					Sexo: $sexo <br>
					Estado Civil: $civil <br>
					Cidade: $cidade <br>
					Estado: $estado <br>
					Mensagem: $msg </p>";
			}

		} else {

			echo "Erro na página";

		}


	?>
</body>
</html>