<?php
	include "bloqueio.php";
?>

<?php
	session_start();
	session_destroy();
	header("Location: index.php");
?>