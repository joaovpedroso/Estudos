<?php
	include "bloqueio.php";
?>
<?php
	//Recebe o ID para alteracoes dos devidos clientes
	$id = $_GET["id"];
	$op = $_GET["op"];
	$tipo = $_GET["tipo"];
	$data = date("Y-m-d");

	if($op == 1 and $tipo == "cliente"){
		//echo "Vai alterar os dados do $tipo com id = $id com update da data $data";

		$nome_formu = $_POST["nome"];
		$telefone_formu = $_POST["telefone"];
		$email_formu = $_POST["email"];
		$endereco_formu = $_POST["endereco"];
		$cidade_formu = $_POST["cidade"];
		$bairro_formu = $_POST["bairro"];
		$rg_formu = $_POST["rg"];
		$cpf_formu = $_POST["cpf"];
		$datanascimento_formu = $_POST["datanascimento"];
		
		$sql = "SELECT * FROM clientes WHERE id =".(int)$id;
		$resultado = mysqli_query($con, $sql);
		$dados = mysqli_fetch_array($resultado);
			$nome = $dados["nome"];
			$telefone = $dados["telefone"];
			$email = $dados["email"];
			$endereco = $dados["endereco"];
			$cidade = $dados["cidade"];
			$bairro = $dados["bairro"];
			$rg = $dados["rg"];
			$cpf = $dados["cpf"];
			$datanascimento = $dados["datanascimento"];


		//Vai Comparar se HOUVE alteraçoes nos dados, Caso HAJA vai fazer a alteração no CADASTRO
			if(($nome_formu != $nome) and ($nome_formu != "")){
				$sql = "UPDATE clientes SET nome='$nome_formu', update_dados = '$data' WHERE id =".(int)$id;
				$resultado = mysqli_query($con, $sql);
			}
			if(($telefone_formu != $telefone)and ($telefone_formu != "")){
				$sql = "UPDATE clientes SET telefone='$telefone_formu', update_dados = '$data' WHERE id =".(int)$id;
				$resultado = mysqli_query($con, $sql);
			}

			if(($email_formu != $email)and ($email_formu != "")){
				$sql = "UPDATE clientes SET email='$email_formu', update_dados = '$data' WHERE id =".(int)$id;
				$resultado = mysqli_query($con, $sql);
			}
			if(($endereco_formu != $endereco) and ($endereco_formu != "")){
				$sql = "UPDATE clientes SET endereco='$endereco_formu', update_dados = '$data' WHERE id =".(int)$id;
				$resultado = mysqli_query($con, $sql);
			}
			if(($cidade_formu != $cidade) and ($cidade_formu != "")){
				$sql = "UPDATE clientes SET cidade='$cidade_formu', update_dados = '$data' WHERE id =".(int)$id;
				$resultado = mysqli_query($con, $sql);
			}
			if(($bairro_formu != $bairro) and ($bairro_formu !="")){
				$sql = "UPDATE clientes SET bairro='$bairro_formu', update_dados = '$data' WHERE id =".(int)$id;
				$resultado = mysqli_query($con, $sql);
			}
			if(($rg_formu != $rg)and($rg_formu != "")){
				$sql = "UPDATE clientes SET rg='$rg_formu', update_dados = '$data' WHERE id =".(int)$id;
				$resultado = mysqli_query($con, $sql);
			}
			if(($cpf_formu != $cpf)and($cpf_formu !="")){
				$sql = "UPDATE clientes SET cpf='$cpf_formu', update_dados = '$data' WHERE id =".(int)$id;
				$resultado = mysqli_query($con, $sql);
			}
			if(($datanascimento_formu != $datanascimento)and($datanascimento_formu !="")){
				$sql = "UPDATE clientes SET datanascimento='$datanascimento_formu', update_dados = '$data' WHERE id =".(int)$id;
				$resultado = mysqli_query($con, $sql);
			}

			echo "<div class='alert alert-success text-center container'> 
	              	Dados Alterados ! <br></br>
	               	<a href='inicial.php?pg=detalhes&id=$id'>
	                    Ir a pagina anterior
	                   </a>             
          	 	  </div>";

	}else if($op == 2 and $tipo == "cliente"){
		//echo "Vai deletar o Cliente ( Mudar Status para 0 ) ";
		$sql = "UPDATE clientes SET id_status='0', update_dados = '$data' WHERE id =".(int)$id;
		$resultado = mysqli_query($con, $sql);
		echo "<div class='alert alert-danger text-center container'> 
               $tipo Deletado ! <br></br>
               <a href='inicial.php?pg=detalhes&id=$id'>
                    Ir a pagina anterior
                   </a>             
          	 </div>";
	}
	
	else if($op == 3 and $tipo == "cliente"){
		$sql = "UPDATE clientes SET id_status=1, update_dados='$data' WHERE id = ".(int)$id;
		$resultado = mysqli_query($con, $sql);
		echo "<div class='alert alert-success text-center container'> 
               $tipo Ativo Novamente ! <br></br>
               <a href='inicial.php?pg=detalhes&id=$id'>
                    Ir a pagina anterior
                   </a>             
          	 </div>";
	}
	else if($op == 1 and $tipo == "usuario"){

	}else if($op == 2 and $tipo == "usuario"){

		$sql = "UPDATE usuarios SET id_status='0', update_dados = '$data' WHERE id =".(int)$id;
		$resultado = mysqli_query($con, $sql);
		echo "<div class='alert alert-danger text-center container'> 
               $tipo Deletado ! <br></br>
               <a href='inicial.php?pg=detalhes&id=$id&tipo=usuario'>
                    Ir a pagina anterior
                   </a>             
          	 </div>";
	}else if($op == 3 and $tipo == "usuario"){
		$sql = "UPDATE usuarios SET id_status=1, update_dados='$data' WHERE id = ".(int)$id;
		$resultado = mysqli_query($con, $sql);
		echo "<div class='alert alert-success text-center container'> 
               $tipo Ativo Novamente ! <br></br>
               <a href='inicial.php?pg=detalhes&id=$id&tipo=usuario'>
                    Ir a pagina anterior
                   </a>             
          	 </div>";
	}
?>