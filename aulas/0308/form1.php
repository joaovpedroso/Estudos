<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de Formulário</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Formulário:</h1>
	<form name="form1" method="get" 
	action="ex1.php">
		<fieldset>
			<legend>
				Preencha todos os campos:
			</legend>

			<label for="nome">
				Digite seu nome:
			</label>
			<input type="text" name="nome"
			size="40" placeholder="Nome completo" required>

			<br>

			<label for="email">
				Digite seu e-mail:
			</label>
			<input type="email" name="email"
			size="50" maxlength="45"
			placeholder="Insira um e-mail válido" required>

			<br>

			<button type="reset">
				Apagar
			</button>
			<button type="submit">
				Enviar
			</button>

		</fieldset>
	</form>
</body>
</html>