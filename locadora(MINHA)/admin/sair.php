<?php
	session_start();

	//APAGAR OS DADOS DA SESSAO
	unset( $_SESSION["admin"] );

	//DIRECIONAR PARA O INDEX.PHP
	header( "Location: index.php" );
?>