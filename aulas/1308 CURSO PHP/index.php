<?php
	include_once("model/bootlayout.php"); //include_once repete só uma vez
	include_once("model/bootform.php");

	include_once("model/menu.php");



	include("view/header.php"); // cabeçalho , inlcude repete codigo


		$menu=new Menu($_GET['menu']);
		$menu->show();

	include("view/footer.php"); //rodapé






?>