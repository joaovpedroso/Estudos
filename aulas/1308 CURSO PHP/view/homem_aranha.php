<?php

	$layout=new BootLayout();// novo objeto layout
	

		$layout->showTag("h1","<a href='?'>Home</a>/Homem Aranha");
		$layout->startDiv("row");
		$layout->circleImage("img/homem_aranha.jpg","Homem Araha","?menu=homem_aranha","col-xs-4");
		$layout->endDiv();

?>