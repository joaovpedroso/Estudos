<?php
	$layout=new BootLayout();

	$layout->startDiv("titulo","row");

		$layout->showTag("h1","Categorias");
	$layout->endDiv();

	$layout->startDiv("coluna1","row");
		$layout->circleImage("img/novo.png","Nova Categoria","?menu=cad_categoria_inserir","col-xs-4");

		$layout->circleImage("img/editar.png","Editar Categoria","?menu=lista_categoria_atualiza","col-xs-4");

		$layout->circleImage("img/excluir.png","Excluir Categoria","?menu=cad_categoria_excluir","col-xs-4");

		
	$layout->endDiv();
	




?>