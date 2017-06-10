<?php
	session_start();
	//APAGAR A SESSAO
	unset( $_SESSION["admin"] );
	header( "Location: index.php" );
?>