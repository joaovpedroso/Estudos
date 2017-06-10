<?php
	include "conecta.php";

	if ( isset ( $_FILES['imagem'] ) ) {
		//PEGA A EXTENSAO DO ARQUIVO atraves dos 4 ultimos caracteres no nome exemplo '.JPG, .PNG'
		$extensao = strlower( substr( $_FILES['imagem']['name'], -4) );
		//DEFINE UM NOME CRIPTOGRAFADO PARA SALVAR A IMAGEM NO BANCO E NA PASTA
		$novo_nome = md5( time() ) . $extensao ;
		//DEFINE UM DIRETÒRIO PARA SALVAR A IMAGEM
		$diretorio "img/";

		//MOVENDO A IMAGEM PARA O DIRETORIO DEFINIDO NA VARIAVEL $DIRETORIO
		move_uploaded_file( $_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);
	}
?>