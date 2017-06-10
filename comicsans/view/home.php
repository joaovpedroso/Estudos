<?php
	



	$layout=new BootLayout();
	$db=new Conexao();

	$sql="SELECT * FROM categorias";

	$query_a_estranha=$db->query($sql); // armazena a execução da consulta na variavel

	$layout->startDiv("titulo","row");

		$layout->showTag("h1","Edições");
	$layout->endDiv();

	$layout->startDiv("coluna1","row");

		while($campos=$query_a_estranha->fetch_object()){


		$layout->circleImage("thumbs/{$campos->miniatura}","{$campos->categorias}","#","col-xs-4");
}
	$layout->endDiv();
	




?>


