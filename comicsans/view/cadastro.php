<?php
	$layout=new BootLayout();

	$layout->startDiv("titulo","row");

		$layout->showTag("h1","Cadastros");
	$layout->endDiv();

	$layout->startDiv("coluna1","row");
		$layout->circleImage("img/categoras.png","Categorias","?menu=categoria","col-xs-4");

		$layout->circleImage("img/edicoes.png","Edições","?menu=edicoes","col-xs-4");

		
	$layout->endDiv();
	




?>