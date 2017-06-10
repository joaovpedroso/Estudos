<?php
	
	include_once("model/bootlayout.php");
	include_once("model/bootform.php");
	include_once("model/menu.php");
	include_once 'model/conexao.php';


	include("view/header.php");//cabeçalho


	



		$menu=new Menu($_GET['menu']);
		$menu->show();


	include("view/footer.php");//rodapé



?>