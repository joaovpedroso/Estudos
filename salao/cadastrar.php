<?php
	include "bloqueio.php";
?>
<?php
	
	include "conecta.php";

	$nome = $_POST["nome"];
	$datanascimento = $_POST["datanascimento"];
	$rg = $_POST["rg"];
	$cpf = $_POST["cpf"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
	$endereco = $_POST["endereco"];
	$bairro = $_POST["bairro"];
	$cidade = $_POST["cidade"];
	$status = '1';
	$foto = "icone_foto.jpg";

	//Quando vai inserir dado no banco de dados no nome das colunas nao coloca - se APOSTROPOS ( aspas simples, apenas na instanciacao das variaveis )
	$query = "INSERT INTO clientes (nome, telefone,email,endereco,foto,bairro,cidade,datanascimento,rg,cpf,id_status) VALUES ('$nome','$telefone','$email','$endereco','$foto','$bairro','$cidade','2016-01-01','$rg','$cpf','$status') ";


	$insercao = mysqli_query($con, $query);

	if($insercao){
		echo "<div class='alert alert-success text-center container'> 
               Cadastro efetuado com sucesso ! <br></br>
               <a href='inicial.php?pg=clientes'>
                    Ir a pagina de Clientes
                   </a>             
          	 </div>";
	}else{
		echo "<div class='alert alert-success text-center container'> 
               Cadastro nao foi efetuado ! <br></br>             
           </div>";
    }



    mysqli_close($con);       
?>	