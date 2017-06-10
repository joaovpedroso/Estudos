<?php
include "../config/conecta.php";
include "menu.php";
	
	if ( $_POST) {
		$data = date('Y-m-d');

		$id = trim( $_POST['id'] );

		$titulo = "";

		//Se existir algum Titulo Ele vai atribuir a variavel Titulo
		if ( isset ( $_POST['titulo'] ) ){
			$titulo = trim( $_POST['titulo'] );
		}

		if ( empty( $titulo ) ){
			echo "<script>alert('Título Nao Informado'); history.back();</script>";
		}

		//Informaçao das imagens
		$imagem = $_FILES['imagem'];

			//Numero de Fotos enviadas
			$numeroFotos = count( array_filter( $imagem['name'] ) );

			//Formato de Imagens Permitidos
			$permitido = array('image/jpeg','image/png');

			//Tamanho maximo de Imagens Permitidos
			$maximoTamanho = 1024*1024*2;

			//var_dump($imagem);

			//Diretorio para onde vai as imagens
			$diretorio = '../img';

		//Laço de repetição usado para fazer a alteração e o upload das imagens
		for( $i = 0; $i < $numeroFotos; $i++){
			
			//Nome Da imagem
			$nome = $imagem['name'][$i];

			//Tamanho da Imagem
			$tamanho = $imagem['size'][$i];

			// Recuperando o formato da Imagem JPEG PNG
			$formato = $imagem['type'][$i];

			//Diretorio Temporario da Imagem
			$tmp = $imagem['tmp_name'][$i];

			//Extensao da Imagem
			$extensao = @end( explode('.', $nome) );

			//Nome Unico para a Imagem
			$novoNome = rand().".$extensao";

			if( !in_array($formato, $permitido)){
				echo "<script>alert('Formato não suportado !'); history.back();</script>";
			}else if ($tamanho > $maximoTamanho){
				echo "<script>alert('Imagem Maior que o tamanho permitido 2MB'); history.back();</script>";
			}else {
				if ( move_uploaded_file($tmp, $diretorio."/".$novoNome) ){
					$im = $i+1;
					echo "<script>alert('Upload Realizado Foto: $im ');</script>";

					//Insere as Imagens no banco na tabela IMAGEM
					$sql = "INSERT INTO imagem (`nome`) VALUES (?)";
						$cadastro = $pdo->prepare($sql);
						$cadastro->bindParam(1, $novoNome);
						$cadastro->execute();

					$sql = "SELECT id FROM imagem WHERE nome = ? ";
					$consulta = $pdo->prepare($sql);
					$consulta->bindParam(1, $novoNome);
					$consulta->execute();
					$dados = $consulta->fetch(PDO::FETCH_OBJ);
					$id_img = $dados->id;

					$sql = "INSERT INTO galeria_imagens (`id_imagem`) VALUES (?)";
					$consulta = $pdo->prepare($sql);
					$consulta->bindParam(1, $id_img);
					$consulta->execute();
				
				}
			}			
		}

		//echo "Titulo ".$titulo."<br>Nome ".$novoNome."<br> Data: ".$data."<br>ID ".$id;
		//exit;

		$sql = "SELECT * FROM galeria WHERE id = ? LIMIT 1";
		$consulta = $pdo->prepare($sql);
		$consulta->bindParam(1, $id);
		$consulta->execute();
		$dados = $consulta->fetch(PDO::FETCH_OBJ);

		if ( !empty( $dados->id ) ){
			$sql = "UPDATE galeria SET titulo = ?, capa = ?, data = '$data' WHERE id = ?";
			
			$consulta = $pdo->prepare($sql);
			$consulta->bindParam(1, $titulo);
			$consulta->bindParam(2, $novoNome);
			$consulta->bindParam(3, $id);

			if ( $consulta->execute() ){
				echo "<script>alert('Alteração Realizada Com Sucesso'); window.location.href= 'galerias.php'; </script>";
			}else {
				echo "Alteração Nao realizada";
			//echo "<script>alert('Operação Não Realizada'); history.back(); </script>";
		}
		}else {			
			$sql = "INSERT INTO galeria (`titulo`,`data`, `capa`) VALUES (?, '$data', ?)";
			$consulta = $pdo->prepare($sql);
			$consulta->bindParam(1, $titulo);
			$consulta->bindParam(2, $novoNome);
			if ( $consulta->execute() ){
				echo "<script>alert('Galeria Criada');</script>";
			}else {
				echo "Galeria Nao criada";
			}

			// CARAIOOOOOOOOOOOOOOOOOOOOOOOOOOOO COMO FAZE ESSA PORRA AQUI
			/*


				DISGRACERA DO CACETII MININUU


					tOMA NO mEI 


						DA BUNDA QUEÇA PORKERA


			*/
			$sql = "SELECT id FROM galeria WHERE titulo = ?";
			$consulta = $pdo->prepare($sql);
			$consulta->bindParam(1, $titulo);
			$consulta->execute();
			$dados = $consulta->fetch(PDO::FETCH_OBJ);
			$id_galeria = $dados->id;

			$id_galeria_img = 8;
			$sql = "UPDATE galeria_imagens SET id_galeria = ? WHERE id in (SELECT id FROM  ) ";
			$consulta = $pdo->prepare($sql);
			$consulta->bindParam(1, $id_galeria);
			$consulta->bindParam(2, $id_galeria_img);
			$consulta->execute();
			echo "<script>alert('Galeria Associada'); location.href='galerias.php'</script>";
		}				
	}
?>