<?php
	include "menu.php";

	if ( $_POST ){
		$id = trim( $_POST['id'] );
		$classe = trim( $_POST['classe'] );
		$valor = trim( $_POST['valor'] );

		if ( empty ( $classe ) ){
			echo "<script>alert('Preencha a Classe '); history.back();</script>";
		}else if ( empty( $valor ) ){
			echo "<script>alert('Preencha o Valor '); history.back();</script>";
		}else {
			// Verifica se ja tem classe cadastrada com o mesmo nome
			$sql = "SELECT * FROM classe WHERE classe = ? limit 1";
			$consulta = $pdo->prepare($sql);
			$consulta->bindParam(1, $classe);
			$consulta->execute();

			$dados = $consulta->fetch(PDO::FETCH_OBJ);
				if( !empty( $dados->classe ) ){
					echo "<script>alert('Classe Já Cadastrada '); history.back();</script>";


					exit;
				}else{
					//REALIZAR AS VERIFICACOES

					//VERIFICA SE O ID ESTA VAZIO OU ESTA SENDO FEITA ALTERAÇOES 
					if ( empty( $id ) ) {
						//SE SIM CRIA NOVO CADASTRO DE CLASSE
						$sql = "INSERT INTO classe (id, classe, valor) VALUES (NULL, ?, ?)";
						$consulta = $pdo->prepare($sql);
						$consulta->bindParam(1, $classe);
						$consulta->bindParam(2, $valor);
					}else {

						// SE NAO, SOMENTE ALTERA OS DADOS
						$sql = "UPDATE classe SET classe = ?, valor = ? WHERE id = ? LIMIT 1";
						$consulta = $pdo->prepare($sql);
						$consulta->bindParam(1, $classe);
						$consulta->bindParam(2, $valor);
						$consulta->bindParam(3, $id);
					}

					//VERIFICAR SE FORAM FEITAS AS ALTERAÇÔES
					if ( $consulta->execute() ) {
						echo "<script>alert('Classe Cadastrada '); location.href='listarClasse.php';</script>";
					}else {
						echo "<script>alert('Classe Não Cadastrada '); history.back();</script>";
					}
				}
		}
	} else {
		//MENSAGEM DE ERRO AO TENTAR CADASTRAR SEM PASSAR PELO FORMULARIO
		echo "
		<div class='alert alert-danger'>
			<script>alert('ERRO: Acesso Não Permitido !'); history.back();</script>
		</div>";
	}
?>