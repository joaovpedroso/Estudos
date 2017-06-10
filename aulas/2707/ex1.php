<!DOCTYPE html>
<html>
<head>
	<title>Variáveis com PHP</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Variáveis com PHP</h1>
	<?php
		//comentario
		$nome = "Javalyno de Oliveira";
		$idade = 24;
		$salario = 1500.99;
		//mostrar o conteúdo na tela
		echo $nome;
		echo "<br>";
		echo "$nome";
		echo "<br>";
		echo '$nome';
		echo "<br>";
		echo "Nome: $nome";
		echo "<br>";
		echo "Nome: " . $nome;
		//Javalyno tem 18 anos
		echo "<p>$nome tem $idade anos</p>";
	?>
	<h2>Trabalhando com Números</h2>
	<p>Eu gosto de PHP</p>

	<?php
		//quantos meses viveu Javalyno
		$mes = $idade * 12;
		echo "$nome viveu $mes meses";
		echo "<p>$nome ganha $salario</p>";
		//formatar um número
		$novo = number_format($salario,
			2,//casas decimais
			",",//separador de decimais)
			"."//separador de milhares
			);
		echo "<p>Salário R$ $novo</p>";
	?>

</body>
</html>