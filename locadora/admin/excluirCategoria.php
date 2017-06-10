<?php
	include "menu.php";

	$id = "";

	// Recuperar o ID enviado por GET
	if ( isset( $_GET["id"] ) ){
		$id = trim( $_GET["id"] );
	}

	//Verificar se existe filme com esta categoria
	$sql = "SELECT * FROM filme WHERE categoria_id = ? LIMIT 1 ";
	$consulta = $pdo->prepare($sql);
	$consulta->bindParam(1, $id);
	$consulta->execute();

	$dados = $consulta->fetch(PDO::FETCH_OBJ);

	//Verificar se trouxe registro
	if ( empty( $dados->categoria_id ) ){
		//Excluir

		$sql = "DELETE FROM categoria WHERE id = ? LIMIT 1 ";
		$consulta = $pdo->prepare($sql);
		$consulta->bindParam(1, $id);

		//Verificar se executou o DELETE corretamente
		if ( $consulta->execute() ){

			//Enviar para a listagem
			echo "<script>location.href='listarCategoria.php';</script>";
		}else {
			//Deu erro
			echo "<script>alert('Erro ao excluir o registro'); history.back();</script>";
		}


	}else {
		//Mensagem de Erro
		echo "<script>alert('Não foi possível excluir, pois existe um filme cadastrado com esta categoria'); history.back();</script>";
	}
?>