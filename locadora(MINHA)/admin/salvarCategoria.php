<?php
	include "menu.php";

	if ( $_POST ){

		//RECUPERAR OS DADOS DO FORMULARIO
		$id = trim( $_POST['id'] );
		$categoria = trim( $_POST['categoria'] );

		//VERIFICA SE FOI DIGITADO VALOR EM BRANCO NOS CAMPOS
		if( empty( $categoria ) ){
			echo "<script>alert('Preencha a Categoria'); history.back();</script>";
		} else {

			//Verifica se o registro ja existe
			$sql = "SELECT * FROM categoria WHERE categoria = ? limit 1";
			$consulta = $pdo->prepare($sql);
			$consulta->bindParam(1, $categoria);
			$consulta->execute();
			$dados = $consulta->fetch(PDO::FETCH_OBJ);
			if ( !empty( $dados->categoria ) ){
				echo "<script>alert('Categoria Já Cadastrada'); history.back();</script>";
				
				exit;
			}else{

				//Verificar se o ID esta vazio
				if( empty( $id ) ){

					$sql = "INSERT INTO categoria (id, categoria) VALUES (NULL, ?)";
					
					//PREPARAR O SQL
					$consulta = $pdo->prepare($sql);
					//PASSAR O PARAMETRO ?
					$consulta->bindParam(1, $categoria);

				}else {
					//UPDATE
					$sql = "UPDATE categoria SET categoria = ? WHERE id = ? LIMIT 1";
					$consulta = $pdo->prepare($sql);
					$consulta->bindParam(1,$categoria);
					$consulta->bindParam(2,$id);
				}


				//Verificar se Executou corretamente
				if ( $consulta->execute() ){
					echo "<script>alert('Categoria Cadastrada Com Sucesso'); location.href='listarCategoria.php';</script>";
				}else {
					echo "<script>alert('Categoria Não Cadastrada'); history.back();";
				}

			}
		}


	} else {
		//Mensagem de erro ao acessar diretamente o Arquivo
		echo "<div class='alert alert-danger'>
				<script>alert('ERRO: Tentativa inválida !'); history.back();</script>
			  </div>";
	}

?>

</body>
</html>