<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<meta charset="utf-8">
	<style>
		h2{
			font:12pt Arial;
			color: #171559;
			font-weight: bold;
		}
	</style>
	<title></title>
</head>
<body>
	<div>
		<?php
		$v1 = $_GET["x"];
		$v2 = $_GET["y"];
		echo "<h2> Valores Recebidos: $v1 e $v2</h2>";
		echo "O Valor absoluto e3 $v2:". abs($v2);
		echo "Ovalor de $v1<sup>$v2</sup> e". pow($v1, $v2);
		echo "</br> A Raiz  de $v1 e " . sqrt($v1);

		?>

</body>
</html>