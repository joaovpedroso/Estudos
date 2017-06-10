<?php
	include "conecta.php";

  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $datanascimento = $_POST["datanascimento"];
  $usuario = $_POST["usuario"];
  $senha = $_POST["senha"];


	$query = "INSERT INTO usuarios (usuario, senha, nome, email, datanascimento) VALUES ('$usuario','$senha','$nome','$email','$datanascimento')";
	$insercao = mysqli_query($con, $query);

	if($insercao){
		echo "<div class='alert alert-success text-center container'> 
               Usuario Cadastrado com sucesso ! <br></br>
               <a href='inicial.php?pg=usuarios'>
                    Ir a pagina de Usuarios
                   </a>             
          	 </div>";
	}else{
		echo "<div class='alert alert-success text-center container'> 
               Usuario não cadastrado ! <br></br>    
               <a href='inicial.php?pg=usuarios'>
                    Ir a pagina de Usuarios
                   </a>         
           </div>";
    }
?>