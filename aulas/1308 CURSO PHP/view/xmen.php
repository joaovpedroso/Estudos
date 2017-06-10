<?php

	$layout=new BootLayout();// novo objeto layout
	

		$layout->showTag("h1","<a href='?'>Home</a>/Xmen");
		$layout->startDiv("row");
		$layout->circleImage("img/xmen.jpg","Xmen","?menu=xmen","col-xs-4");
		$layout->endDiv();

?>