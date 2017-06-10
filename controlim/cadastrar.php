<?php
	include "conecta.php";

	$datacompra = $_POST["datacompra"];
	$valor = $_POST["valor"];
	$produtos = $_POST["produtos"];

	$query = "INSERT INTO entradas (data_entrada, valor, produtos) VALUES ('$datacompra','$valor','$produtos')";
	$insercao = mysqli_query($con, $query);

	if($insercao){
		echo "<div class='alert alert-success text-center container'> 
               Cadastro efetuado com sucesso ! <br></br>
               <a href='inicial.php?pg=entradas'>
                    Ir a pagina de Compras
                   </a>             
          	 </div>";
	}else{
		echo "<div class='alert alert-success text-center container'> 
               Cadastro nao foi efetuado ! <br></br>    
               <a href='inicial.php?pg=entradas'>
                    Ir a pagina de Compras
                   </a>         
           </div>";
    }
?>