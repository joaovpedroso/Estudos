<script type="text/javascript">
	function load(){
		window.location.href="../?menu=cad_categoria_inserir";
	}

</script>


<?php
	include_once '../model/conexao.php';
	include_once '../model/crud.php';

	$categoria[]=$_POST['categoria'];
	$categoria[]=$_POST['descricao'];

//Aqui trata a imagem para o banco
	$arquivo_temp=$_FILES['miniatura']['tmp_name'];
	//arquivo temporario após upload
	$arquivo=str_replace(" ","_",$_FILES['miniatura'] ['name']);
	$upload_dir="../thumbs/".$arquivo;

	copy($arquivo_temp,$upload_dir);
	$categoria[]=$arquivo;
	//fim do tratamento

	//echo $categoria;

	$crud=new Crud();

	$crud->insert("categorias",$categoria);

	echo "<script>load();</script>";

?>