	<link href="css/bootstrap.min.css" rel="stylesheet">
<?php
	
	//Iniciar a Sessão
	session_start();

	if( $_POST ){

		//print_r($_POST);
		//Recuperar as Variaveis
		$nome = trim( $_POST['nome'] );
		$lancamento = $_POST['lancamento'];
		$valor = $_POST['valor'];

		if ( empty( $nome ) ) {
			echo "<script>alert('Preencha o Nome !'); history.back(); </script>";
		}else if( empty( $valor ) ){
			echo "<script>alert('Preencha o Valor !'); history.back(); </script>";
		}else{
			$_SESSION["produto"][] = array(
				"nome"=>$nome,
				"lancamento"=>$lancamento,
				"valor"=>$valor
			);
			echo "<a href='carrinho.php'><button class='btn btn-default'>Carrinho de Compras</button></a>";
		}

		//echo "$nome <br> $lancamento";
	}else{
		echo "<script>alert('Erro !'); history.back();</script>";
	}