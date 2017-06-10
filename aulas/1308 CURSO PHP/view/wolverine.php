<?php

	$layout=new BootLayout();// novo objeto layout
	

		$layout->showTag("h1","<a href='?'>Home</a>/Wolverine");
		$layout->startDiv("row");
		$layout->circleImage("img/wolverine.jpg","Wolverine","?menu=wolverine","col-xs-4");
		$layout->endDiv();

?>