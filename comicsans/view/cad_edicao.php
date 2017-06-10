<?php
	$form=new BootForm();

	$form->startDiv("titulo","row");
		$form->showTag("h2","Cadastro de Edições");
	$form->endDiv();
	$form->startDiv("formulario","col-xs-6");
		$form->form("formu","formu","insere.php",
			"post","enctype='multipart/form-data'");

		$form->input("text","edicao","edicao", "","","edicao","Edição: ");


		$form->endForm();


	$form->endDiv();

?>