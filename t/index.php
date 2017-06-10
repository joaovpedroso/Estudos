<html>
<head>
	<title>Teste</title>
	<style type="text/css">
		#cpf { display: none; }
		#cnpj{ display: none; }
	</style>


	<script type="text/javascript">


		//HABILITAR E DESABILITAR CAMPOS CPF CNPJ
		function habilitaCampos() {	
			
			var op = document.getElementById("select").value;

			if( op == 01 ){
					document.getElementById("cpf").style.display = "block";
					document.getElementById("cnpj").style.display = "none";
					//document.getElementById("cpf").disabled = false; //Habilitando
					//document.getElementById("cnpj").disabled = true;
			}
			 if (op == 02) {
				document.getElementById("cpf").style.display = "none";
				document.getElementById("cnpj").style.display = "block";
				//document.getElementById("cpf").disabled = true; //Desabilitando
				//document.getElementById("cnpj").disabled = false; //Habilitando	
			}
		}		


		//VALIDAR E LOCALIZAR PELO CEP
		function meu_callback(conteudo) {
	        if (!("erro" in conteudo)) {
	            //Atualiza os campos com os valores.
	            document.getElementById('rua').value=(conteudo.logradouro);
	            document.getElementById('bairro').value=(conteudo.bairro);
	            document.getElementById('cidade').value=(conteudo.localidade);
	            document.getElementById('uf').value=(conteudo.uf);
	        } //end if.
	        else {
	            //CEP não Encontrado.
	            limpa_formulário_cep();
	            alert("CEP não encontrado.");
	        }
	    }
        
	    function pesquisacep(valor) {

	        //Nova variável "cep" somente com dígitos.
	        var cep = valor.replace(/\D/g, '');

	        //Verifica se campo cep possui valor informado.
	        if (cep != "") {

	            //Expressão regular para validar o CEP.
	            var validacep = /^[0-9]{8}$/;

	            //Valida o formato do CEP.
	            if(validacep.test(cep)) {

	                //Preenche os campos com "..." enquanto consulta webservice.
	                document.getElementById('rua').value="Pesquisando...";
	                document.getElementById('bairro').value="Pesquisando...";
	                document.getElementById('cidade').value="Pesquisando...";
	                document.getElementById('uf').value="Pesquisando...";

	                //Cria um elemento javascript.
	                var script = document.createElement('script');

	                //Sincroniza com o callback.
	                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

	                //Insere script no documento e carrega o conteúdo.
	                document.body.appendChild(script);

	            } //end if.
	            else {
	                //cep é inválido.
	                alert("Formato de CEP inválido.");
	            }
	        } //end if.
	        else {
	            //cep sem valor, limpa formulário.
	            alert("Preencha o Campo CEP.");
	        }
	    };
	</script>

</head>
<body>
	<form name="pedido">

		<div class="form-group">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control">
		</div>


		<label>Documento</label>
		<select name="select" id="select" onchange="javascript:habilitaCampos();">
			<option value="00"></option>>
			<option value="01">CPF</option>
			<option value="02">CNPJ</option>
		</select>

		
		<br>
		<div id="cpf">
			<label>CPF</label>
			<input name="cpf"  type="text">
		</div>	

		<div id="cnpj">
			<label>CNPJ</label>
			<input name="cnpj" type="text">
		</div>

		<br><br><hr>
		Endereço:<br><br>

		<label>CEP</label>
		<input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
            onblur="pesquisacep(this.value);" /><br>

        <label>Rua:</label>
        <input name="rua" type="text" id="rua" size="60" />
        <label>Numero:</label>
        <input type="text" name="numero" id="numero" required><br>
        <label>Bairro:</label>
        <input name="bairro" type="text" id="bairro" size="40" /><br>
        <label>Cidade:</label>
        <input name="cidade" type="text" id="cidade" size="40" />
        <label>Estado:</label>
        <input name="uf" type="text" id="uf" size="2" /><br>    

	</form>
</body>
</html>