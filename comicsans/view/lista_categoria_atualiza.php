<style type="text/css">

			.zebra:nth-child(odd){background:#BAD2EB;}
			.flutuar{position: fixed; overflow: hidden;z-index:999;top:6%;background: #fff;width: 100%;margin-left: -8%;}

</style>
<script type="text/javascript">
	
	function editar(){
		document.getElementById("formu").submit();
	}
</script>


<?php
	

	$form=new BootForm();
	$db=new Conexao();

	$sql="SELECT * FROM categorias";

	$query=$db->query($sql);

$form->form("formu","formu","?menu=cad_categoria_editar","post","enctype=multipart/form-data");
	$form->startDiv("titulo","row");
		$form->showTag("h2","Categorias");
	$form->endDiv();
	
	$form->startDiv("cabecalho","row bg-primary");
		
		


		$form->tdList("  ","col-sm-2");
		$form->tdList("Categoria","col-sm-2");
		$form->tdList("Descrição","col-sm-2");
		$form->tdList("Miniatura","col-sm-2");


	$form->endDiv();

	while($campos=$query->fetch_object()){
		$form->startDiv("cabecalho","row zebra");
			
			$form->tdList($form->radioList("",$campos->id_categorias,"lista",""),"col-sm-2");
			$form->tdList($campos->categorias,"col-sm-2");
			$form->tdList($campos->descricao,"col-sm-2");
			$form->tdList($campos->miniatura,"col-sm-2");



		$form->endDiv();
	}

	
		$form->startDiv("botoes","col-xs-4");

			
			$form->circleImage("img/editar.png","Editar","javascript:editar()","col-xs-6");
			$form->circleImage("img/cancelar.png","Cancelar","?menu=cad_categoria_editar","col-xs-6");
		

		$form->endDiv();

$form->endForm();

?>