<?php
	include "conecta.php";
	include "topo.php";
?>
<?php
	$sql = "SELECT * FROM categoria order by nome";
	$resultado = mysqli_query($con, $sql);
	while($dados = mysqli_fetch_array($resultado)){
		$categoria = $dados["nome"];
		$id = $dados["id"];

		echo "<div class='categorias'>
                <ul>
                  <li><a href=''>$categoria</a></li>
                </ul>
               </div> ";
	}
?>