<?php
	include "bloqueio.php";
?>	

<?php
	include "conecta.php";

	$marca = $_POST["marca"];
	$telefone = $_POST["telefone"];
	$endereco = $_POST["endereco"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];

	$query = "INSERT INTO categoria (marca,telefone,endereco,cidade,estado) VALUES ('$marca','$telefone','$endereco','$cidade','$estado')";
	$insercao = mysqli_query($con,$query);

	if($insercao){
		echo "<div class='alert alert-success text-center container'> 
               Cadastro efetuado com sucesso ! <br></br>
               <a href='inicial.php?pg=cadastromarca'>
                   	Cadastro de Marcas
                   </a>             
          	 </div>";
	}else{
		echo "<div class='alert alert-success text-center container'> 
               Cadastro nao foi efetuado ! <br></br>             
           </div>";
    }

?>