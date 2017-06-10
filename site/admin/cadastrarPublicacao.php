<?php
include "../config/conecta.php";
include "menu.php";
	
	if ( $_POST ) {

		$id = trim( $_POST['id'] );
		
		$titulo = $conteudo = "";

		if ( isset ( $_POST['titulo'] ) ){
			$titulo = trim( $_POST['titulo'] );
		}
		if ( isset ( $_POST['subtitulo'] ) ) {
			$subtitulo = trim( $_POST['subtitulo'] );
		}
		if ( isset ( $_POST['conteudo'] ) ){
			$conteudo = trim ( $_POST['conteudo'] );
		}
		if ( isset ( $_FILES['imagem'] ) ) {

			// RECEBER A EXTENSAO DO ARQUIVO
			$extensao = strtolower( substr ( $_FILES['imagem']['name'], -4 ) );

			// $imagem = trim( $_FILES['imagem'] );
			//DEFINIR O NOVO NOME DO ARQUIVO COM UMA CRIPTOGRAFIA E DEFININDO O NOME COMO A DATA E A HORA 
			// DA CRIACAO
			$imagem = md5( time()) .$extensao; 

			//DIRETÒRIO PARA ONDE VAI SER SALVA AS IMAGENS
			$diretorio = "../img/";

			//REALIZAR O UPLOAD
			move_uploaded_file( $_FILES['imagem']['tmp_name'], $diretorio.$imagem);

		}

		if ( empty ( $titulo ) ){
			echo "<script>alert('Preencha o campo Titulo');history.back();</script>";
		}
		else if( empty ($subtitulo) ){
			echo "<script>alert('Preencha o campo Sub Titulo');history.back();</script>";
		}
		else if ( empty ( $conteudo ) ) {
			echo "<script>alert('Preencha o campo Conteudo');history.back();</script>";
		}else {		
			
			$sql = "SELECT * FROM publicacoes WHERE titulo = ? LIMIT 1";
			$consulta = $pdo->prepare($sql);
			$consulta->bindParam(1, $titulo);
			$consulta->execute();
			$dados = $consulta->fetch(PDO::FETCH_OBJ);
				if ( !empty( $dados->titulo ) ){
					echo "<script>alert('Titulo Já Cadastrado Informe Outro'); history.back();</script>";
				
					exit;
				}else {
					$id_usuario = 4;
					$status = 1;
					$data = date('Y-m-d');

					if ( empty( $id ) ){
						echo "<script>alert('Cadastrando Nova Publicacao');</script>";
						// Se nao existir Noticia com o ID informado Cria uma 
						$sql = "INSERT INTO publicacoes (titulo,subtitulo,conteudo,status,id_usuario,capa,data) VALUES (?, ?, ?, ?, ?, ?, ?)";
						$consulta = $pdo->prepare($sql);
						$consulta->bindParam(1, $titulo);
						$consulta->bindParam(2, $subtitulo);
						$consulta->bindParam(3, $conteudo);
						$consulta->bindParam(4, $status);
						$consulta->bindParam(5, $id_usuario);
						$consulta->bindParam(6, $imagem);
						$consulta->bindParam(7, $data);

					}else {
					$id_usuario = 4;
					$status = 1;
					$data = date('Y-m-d');
						//Se existir Faz Apenas as Alterações
						$sql = "UPDATE publicacoes SET titulo = ?, subtitulo = ?, conteudo = ?, status = ?, id_usuario = ?, capa = ?, data = ? WHERE id = ?";
						$consulta = $pdo->prepare($sql);
						$consulta->bindParam(1, $titulo);
						$consulta->bindParam(2, $subtitulo);
						$consulta->bindParam(3, $conteudo);
						$consulta->bindParam(4, $status);
						$consulta->bindParam(5, $id_usuario);
						$consulta->bindParam(6, $imagem);
						$consulta->bindParam(7, $data);
						$consulta->bindParam(8, $id);
					}

					if ( $consulta->execute() ){
						echo "<script>alert('Publicação Cadastrada / Alterada'); location.href='publicacoes.php';</script>";
					}else {
						echo "<script>alert('Publicação Não Cadastrada'); history.back();</script>";
					}
				}
			
		}
	}


/*
	$data = date('Y-m-d');
			$usuario = 4;
			
			$sql = "INSERT INTO publicacoes (`titulo`,`data`,`subtitulo`,`capa`,`id_usuario`,`status`,conteudo) VALUES ('$titulo','$data','$subtitulo','$imagem','$usuario',1,'$conteudo')";
			$cadastro = $pdo->prepare($sql);
			$cadastro->execute();
								
			header('Location: publicacoes.php');
	
*/

?>