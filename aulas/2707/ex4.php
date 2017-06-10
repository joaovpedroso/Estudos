<!DOCTYPE html>
<html>
<head>
	<title>GET 2</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$x = 0;

	//verificar se existe GET[x]
	if (isset($_GET["x"])) {
		$x = (int)$_GET["x"];
		//(int) cast para inteiro
	}

	//somar mais 1 ao $x
	$x++;
	echo "<p>O número é $x</p>";
	echo "<a href='ex4.php?x=$x'>Aperte
	</a>";
?>
</body>
</html>