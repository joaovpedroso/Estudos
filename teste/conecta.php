<?php
	
	$con = mysqli_connect("localhost","root","mysql","alfa");
	mysqli_set_charset($con, "utf8");
	if (mysqli_connect_errno()) {
	    echo "Erro ao conectar no banco de dados : ", mysqli_connect_error();
	    exit();
	}

