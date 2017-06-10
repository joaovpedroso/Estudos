<?php
	include "conecta.php";
	include "topo.php";
	$id = $_GET["id"];
?>
<div class="container">
<?php
	$sql = "SELECT * FROM plataforma WHERE id = $id limit 4";
	$resultado = mysqli_query($con, $sql);
	while($dados = mysqli_fetch_array($resultado)){
		$nome = $dados["nome"];
		$plataforma_id = $dados["id"];
		echo "<h1>Jogos Para $nome</h1>";

		$sql_jogos = "SELECT id,nome FROM jogo WHERE id in (SELECT jogo_id FROM plataforma_jogo WHERE plataforma_id = $id) limit 4";

		$resultado_jogos = mysqli_query($con, $sql_jogos);
		while($dados_jogos = mysqli_fetch_array($resultado_jogos)){
			
			$jogo_id = $dados_jogos["id"];
			$nome = $dados_jogos["nome"];

			$sql_foto = "SELECT foto FROM foto WHERE jogo_id = $jogo_id limit 1";
			$resultado_fotos = mysqli_query($con, $sql_foto);
			while($dados_fotos = mysqli_fetch_array($resultado_fotos)){
				$foto = $dados_fotos["foto"];
				echo "<div class='jogos'>
						<a href='jogo.php?plataforma_id=$plataforma_id&jogo_id=$jogo_id'>
							<img src='images/$foto' style='width:180px; height: 180px'>
							<p>$nome</p>
						</a>
					  </div>";

			}	
		}
	}
?>

</div>

<?php
	include "rodape.php";
?>	