<?php
	include "bloqueio.php";
?>
<?php
	
	include "conecta.php";

	$tipo = $_POST["tipo"];

	if($tipo == "produto"){
	
		$nome = $_POST["nomeProduto"];
		$marca = $_POST["marcas"];
		$valor = $_POST["valor"];
		$quantidade = $_POST["quantidade"];
		$descricao = $_POST["descricao"];
		$data_compra = date('Y-m-d');
	
		$sql = "INSERT INTO produtos (nome, valor, descricao, categoria_id, quantidade, data_compra) VALUES ('$nome','$valor','$descricao','$marca','$quantidade', '$data_compra')";
	
		$insercao = mysqli_query($con, $sql);
		if($insercao){
			echo "
				<div class='alert alert-success text-center container'> 
	               Produto Cadastrado com sucesso ! <br></br>
	               <a href='inicial.php?pg=produtos'>
	                    Ir a pagina de Produtos
	                   </a>             
	          	 </div>";
		}else{
			echo "<div class='alert alert-danger text-center container'> 
	               Produto nao foi Cadastrado ! <br></br>             
	           	</div>";
	    }
	}else if($tipo == "servico"){
		echo "Cadastro de servicos";
		$nome = $_POST["nomeProduto"];
		$marca = $_POST["marcas"];
		$valor = $_POST["valor"];
		$quantidade = $_POST["quantidade"];
		$descricao = $_POST["descricao"];
		$data_compra = date('Y-m-d');
	
		$sql = "INSERT INTO servicos (valor, nome, descricao,data_compra) VALUES ('$valor','$nome','$descricao', $data_compra)";
	
		$insercao = mysqli_query($con, $sql);
		
		if($insercao){
			echo "
				<div class='alert alert-success text-center container'> 
	               Serviço Cadastrado com sucesso ! <br></br>
	               <a href='inicial.php?pg=servicos'>
	                    Ir a pagina de Servicos
	                   </a>             
	          	 </div>";
		}else{
			echo "<div class='alert alert-danger text-center container'> 
	               Serviço nao foi Cadastrado ! <br></br>             
	           	</div>";
	    }

	}
?>