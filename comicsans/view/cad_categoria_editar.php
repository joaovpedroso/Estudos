<script type="text/javascript">
	
	function salvar(){
		document.getElementById("formu").submit();
	}
</script>

<?php
	$form=new BootForm();
	$db=new Conexao ();

	$id=$_POST['lista'];

	$sql ="SELECT * FROM categorias WHERE id_categorias={$id}";
	$query=$db->query($sql);

	while($campos=$query->fecth_object()){

		$categorias=$campos->categorias;
		$descricao=$campos->descricao;
		$imagem=$campos->miniatura;
	}

	$form->startDiv("titulo","row");
		$form->showTag("h2","Editar Categoria");
	$form->endDiv();
	
	$form->startDiv("formulario","row");
		$form->startDiv("formulario","col-xs-4");
		$form->form("formu","formu","control/inserir_categoria_control.php","post","enctype=multipart/form-data");	
			
			$form->input("hidden","id_categoria","id_categoria", $id,"",""," ");

			$form->input("text","categoria","categoria",$categorias,"","categoria","Categoria: ");
			$form->input("text","descricao","descricao", $descricao,"","descricao","Descrição: ");
			$form->input("text","imagem","imagem",$imagem,"disabled","imagem","Imagem Atual ");
			
			$form->input("file","miniatura","miniatura", "","","miniatura","Miniatura: ");


			

		$form->endDiv();
	
	
		$form->startDiv("formulario","col-xs-4");

			$form->circleImage("img/salvar.png","Salvar","javascript:salvar()","col-xs-6");

			$form->circleImage("img/cancelar.png","Cancelar","?menu=cad_categoria_editar","col-xs-6");
		$form->endForm();

		$form->endDiv();

	


?>