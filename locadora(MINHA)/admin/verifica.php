<?php
	//Iniciar a Sessão
	session_start();

	//Verificar se os dados foram informados
	if($_POST){
		//Conectar no bando de dados
		include "../config/conecta.php";
		
		//Duas variaveis
		$login = $senha = "";
		//$senha ="";

		//Verificacao 
		if(isset ( $_POST['login'] ) ){
			$login = trim( $_POST['login'] );
		}
		if(isset ($_POST['senha']) ){
			$senha = trim($_POST['senha']);
		}

		//Verificar se os campos estao Preenchidos
		if( empty( $login ) ){
			//mostra uma mensagem e retorna na tela anterior
			echo "<script>alert('Preencha o Login'); history.back();</script>";
		}else if ( empty( $senha ) ){
			echo "<script>alert('Preencha a Senha'); history.back();</script>";
		}else {

			//buscar o usuario com o login
			$sql = "SELECT * FROM usuario WHERE login = ? and ativo = 'Sim' limit 1";
			//Preparar consulta para ser executado
			$consulta = $pdo->prepare($sql);
			//Passar parametro
			$consulta->bindParam(1, $login);
			//Executar a consulta
			$consulta->execute();

			$dados = $consulta->fetch(PDO::FETCH_OBJ);

				//Criptografas a Senha
				$senha = md5($senha);

				//Verificar se retornou algum valor
				if( empty ( $dados->id ) ){
					echo "<script>alert('Usuario nao encontrado ou nao ativo '); history.back();</script>";
				}
				else if ( $senha != $dados->senha ){
					echo "<script>alert('Senha Incorreta'); history.back();</script>";
				}else {
					// Tudo OK
					//Gravar daddos na sessao
					$_SESSION["admin"] = array(
						"id" => $dados->id,
						"nome" => $dados->nome,
						"login" => $dados->login
						);
					// Redirecinar para a pagina Home
					header('Location: home.php');
				}
		}

	}else {
		//Voltar a pagina de login
		header('Location: index.php');
	}