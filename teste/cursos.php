<?php

	$id = "";
	if (isset($_GET["id"])) $id = trim($_GET["id"]);

	$sql = "select * from tipo where id = ".(int)$id." limit 1";
	$result = mysqli_query($con,$sql);
	$dados = mysqli_fetch_array($result);
	$id = $dados['id'];
	$tipo = $dados['tipo'];
?>

<h1>Cursos de <?=$tipo;?></h1>

<?php

	$sql = "select * from curso where tipo_id = ".(int)$id. " order by curso";
	$result = mysqli_query($con,$sql);
	while ($dados = mysqli_fetch_array($result)) {
		$id = $dados['id'];
		$curso = $dados['curso'];
		$perfil = $dados['perfil'];
		$mercado = $dados['mercado'];
		$area  = $dados['area'];
		

		echo "<h2>$curso</h2>
		<h3>Pefil do Profissional</h2>
		<p>$perfil</p>
		<h3>Mercado de Trabalho</h3>
		<p>$mercado</p>
		<h3>Área de Atuação</h3>
		<p>$area</p>
		<hr>";

	}

?>
