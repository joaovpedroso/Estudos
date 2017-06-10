<h1>Enviar e-mail</h1>

<?php

	if ($_POST) {

		$nome = trim($_POST["nome"]);
		$email = trim($_POST["email"]);
		$mensagem = trim($_POST["mensagem"]);

		if (empty($nome)) {
			echo "<div class='alert alert-warning'>Preencha o nome</div>";
		} else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			echo "<div class='alert alert-warning'>E-mail inválido</div>";
		} else {

			$para = "burnes@professorburnes.com";
			$assunto = "E-mail enviado do site";

			if (mail($para,$assunto,$mensagem,"From: $email")) {
				echo "<div class='alert alert-success'>E-mail enviado com sucesso</div>";
			} else {
				echo "<div class='alert alert-warning'>Erro ao enviar e-mail</div>";
			}


		}

	} else {
		echo "<div class='alert alert-danger'>Erro ao enviar mensagem, preencha corretamente o formulário de contato</div>";
	}