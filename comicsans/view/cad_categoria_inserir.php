<script type="text/javascript">
	
	function salvar(){
		document.getElementById("formu").submit();
	}
</script>

<?php
	$form=new BootForm();

	$form->startDiv("titulo","row");
		$form->showTag("h2","Nova Categoria");
	$form->endDiv();
	
	$form->startDiv("formulario","row");
		$form->startDiv("formulario","col-xs-4");
		$form->form("formu","formu","control/inserir_categoria_control.php","post","enctype=multipart/form-data");	
			$form->input("text","categoria","categoria", "","","categoria","Categoria: ");
			$form->input("text","descricao","descricao", "","","descricao","Descrição: ");
			$form->input("file","miniatura","miniatura", "","","miniatura","Miniatura: ");


			

		$form->endDiv();
	
	
		$form->startDiv("formulario","col-xs-4");

			$form->circleImage("img/salvar.png","Salvar","javascript:salvar()","col-xs-6");

			$form->circleImage("img/cancelar.png","Cancelar","?menu=cad_categoria_editar","col-xs-6");
		$form->endForm();

		$form->endDiv();

	


?>