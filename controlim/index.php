<!DOCTYPE html>
<html>
<head>
	
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script type="text/javascript" src="bootstrap/js/jquery.maskedinput.js"></script>

	<title>Login</title>
</head>
<body>
	<div class="row" style="margin-left: 25em; margin-top: 10%;">
		<div class="col-xs-6 ">
			<div class="panel panel-success">
				<div class="panel-heading centraliza_texto"><b>Login</b></div>
				<div class="panel-body">
					<form name="login" method="post" action="login.php">
						<div class="form-group">
							<label for='login'>Usuario</label>
							<input class="form-control" type="text" name="login"/><br></br>
						</div>
						<div class="form-group">	
							<label for='senha'>Senha</label>
							<input class="form-control" type="password" name="senha"/><br></br>
						</div>
						<div class="form-group centraliza_texto">
							<input class="btn btn-warning" type="submit" value="Entrar">
						</div>
					</form>
				</div>
			</div>		
		</div>
	</div>		
</body>
</html>