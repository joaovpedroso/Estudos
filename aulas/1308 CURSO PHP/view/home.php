<?php
	$layout=new BootLayout();// novo objeto layout
	$layout->startDiv("titulo","row");

		$layout->showTag("h1","Edições");

	$layout->endDiv();	

	$layout->startDiv("coluna1","row");
		$layout->circleImage("img/batman.jpg","Batman","?menu=batman","col-xs-4");
		$layout->circleImage("img/homem_aranha.jpg","Homen Aranha","?menu=homem_aranha","col-xs-4");
		$layout->circleImage("img/lanterna.jpg","Lanterna","?menu=lanterna","col-xs-4");
	$layout->endDiv();

	$layout->startDiv("coluna2","row");
		$layout->circleImage("img/superman.jpg","Superman","?menu=superman","col-xs-4");
		$layout->circleImage("img/wolverine.jpg","Wolverine","?menu=wolverine","col-xs-4");
		$layout->circleImage("img/xmen.jpg","Xmen","?menu=xmen","col-xs-4");
	$layout->endDiv();
?>