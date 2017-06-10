<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
</head>

	<div class="row">	
		<div class="col-xs-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Login
				</div>
				<div class="panel-body text-center">
					<div class="container">
						<form class="form-group" name="login" action="login.php" method="post">
							<div class="row">
								<div class="col-md-3">
									<label for="usuario">Login</label>
									<input type="text" name="login" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label for="senha">Senha</label>
									<input type="password" name="senha" class="form-control">
								</div>
							</div>	

						
								<div class="col-md-4" style="margin-top:4px;">	
									<button type="submit" name="logar" id="login" class="btn btn-success">
										Entrar
									</button>
									<button type="reset" name="limpar" id="limpar" class="btn btn-danger">
										Limpar
									</button>
								</div>	
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>