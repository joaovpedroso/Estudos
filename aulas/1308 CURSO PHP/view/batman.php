<?php

	$layout=new BootLayout();// novo objeto layout
	

		$layout->showTag("h1","<a href='?'>Home</a>/Batman");
		$layout->startDiv("row");
		$layout->circleImage("img/batman.jpg","Batman","?menu=batman","col-xs-4");
		$layout->endDiv();

?>