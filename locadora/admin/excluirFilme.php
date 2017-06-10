<?php
	include "menu.php";

	$id = "";

	if ( isset( $_GET['id'] ) ) {
		$id = trim( $_GET['id'] );
	}

	//Verificar se existe Locacao do Filme
	$sql = "SELECT * FROM filme_locacao WHERE filme_id = ? LIMIT 1";
	$consulta = $pdo->prepare($sql);
	$consulta->bindParam(1, $id);
	$consulta->execute();

	$dados = $consulta->fetch( PDO::FETCH_OBJ );

	//Ver se o filme esta locado
	if( empty( $dados->filme_id ) ) {

		$sql = "DELETE FROM filme WHERE id = ? LIMIT 1";
		$consulta = $pdo->prepare($sql);
		$consulta->bindParam(1, $id);

		//Verificar se deu certo a exclusao
		if( $consulta->execute() ) {
			echo "<script>alert('Filme Excluido com Sucesso !'); location.href='listarFilme.php';</script>";
		}else {
			echo "<script>alert('Erro ao Excluir Filme'); history.back();</script>";
		}

	}else {
		echo "<script>alert('Impossivel Excluir Filme, Há uma Locação Registrada a Ele'); history.back();</script>";
	}

	

?>