<?php

	$layout=new BootLayout();// novo objeto layout
	

		$layout->showTag("h1","<a href='?'>Home</a>/Lanterna");
		$layout->startDiv("row");
		$layout->circleImage("img/lanterna.jpg","Lanterna","?menu=lanterna","col-xs-4");
		$layout->endDiv();

?>