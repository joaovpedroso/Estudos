<!DOCTYPE html>
<html>
<head>
	<title>Formulário 2</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Formulário 2</h1>
	<form name="form1" method="post"
	action="ex2.php">

		<label for="fone">Telefone</label>
		<input type="tel" name="fone"
		size="20" placeholder="Fone com DDD">

		<br>
		<label for="data">Data</label>
		<input type="date" name="data"
		size="10" required>

		<br>
		<label for="sexo">Sexo</label>
		<input type="radio" name="sexo"
		value="Masculino"> Masculino
		<input type="radio" name="sexo"
		value="Feminino"> Feminino

		<br>
		<label for="civil">
			Estado Civil
		</label>
		<select name="civil">
			<option>Solteiro</option>
			<option>Casado</option>
			<option>Viúvo</option>
			<option>Separado</option>
			<option>Enrolado</option>
		</select>

		<br>
		<label for="cidade">Cidade</label>
		<input type="text" name="cidade"
		size="40" value="Umuarama"
		placeholder="Digite uma Cidade">

		<br>
		<label for="estado">Estado</label>
		<select name="estado" required>
			<option value="">
				Selecione um Estado
			</option>
			<option value="PR">
				Paraná
			</option>
			<option value="SC">
				Santa Catarina
			</option>
		</select>

		<br>
		<label for="msg">Mensagem</label>
		<textarea name="msg" required
		placeholder="Digite sua mensagem"
		rows="5" cols="40"></textarea>

		<br>
		<button type="reset">
			Limpar
		</button>
		<button type="submit">
			Enviar
		</button>


	</form>
</body>
</html>