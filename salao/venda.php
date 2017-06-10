AQUI SERA A PART DE LANÇAR NO BANCO DE DADOS A VENDA PARA TAL CLIENTE E RECEBER TODOS OS DADOS VIA POST

<?php
	include "conecta.php";
	include "bloqueio.php";
?>

<?php
	$cliente = $_POST["cliente"];
	echo "<br></br>CLIENTE: $cliente<br></br>";

	foreach ($_POST["idProduto"] as $key => $produto) {
		echo "PRODUTO: $produto<br>";
	}

	foreach ($_POST["quantidade"] as $key => $quantidade) {
			echo "QUANTIDADE $quantidade<br>";	
	}

	

?>	