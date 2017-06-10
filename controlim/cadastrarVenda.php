<?php
	include "conecta.php";

	$datavenda = $_POST["datavenda"];
	$valor = $_POST["valor"];
	$produtos = $_POST["produtos"];

	$query = "INSERT INTO saidas (data_saida, valor, produtos) VALUES ('$datavenda','$valor','$produtos')";
	$insercao = mysqli_query($con, $query);

	if($insercao){
		echo "<div class='alert alert-success text-center container'> 
               Venda efetuada com sucesso ! <br></br>
               <a href='inicial.php?pg=saidas'>
                    Ir a pagina de Vendas
                   </a>             
          	 </div>";
	}else{
		echo "<div class='alert alert-success text-center container'> 
               Venda nao foi efetuada ! <br></br>    
               <a href='inicial.php?pg=saidas'>
                    Ir a pagina de Vendas
                   </a>         
           </div>";
    }
?>