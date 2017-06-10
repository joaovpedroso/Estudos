<!DOCTYPE html>
<html>
<head>
	<title>Operações</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Operações</h1>
	<?php
		$n1 = 7;
		//verificar se o nr é par
		$n2 = $n1 % 2;
		echo $n2;

		if ($n2 == 0) {
			echo "<p>Par!</p>";
		} else {
			echo "<p>Ímpar!</p>";
		}

	?>
</body>
</html>