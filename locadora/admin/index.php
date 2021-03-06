<!DOCTYPE html>
<html>
<head>
	<title>Vandersystem</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" 
	href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" 
	href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" 
	href="../css/admin.css">

	<script type="text/javascript"
	src="../js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript"
	src="../js/bootstrap.min.js"></script>
	<script type="text/javascript"
	src="../js/bootstrap-inputmask.min.js"></script>
	<script type="text/javascript"
	src="../js/jqBootstrapValidation.js"></script>
	<script type="text/javascript"
	src="../js/jquery.maskMoney.min.js"></script>

	<script>
  	$(function () { 
  		$("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); 
  	} );
	</script>
</head>
<body>

<div id="login">
	<h1>Vandersystem - Login</h1>

	<form name="login" method="post" action="verifica.php" novalidate>

		<div class="control-group">
			<label class="control-label">
			Login:
			</label>
			<div class="controls">
				<input type="text"
				name="login" required
				data-validation-required-message="Preencha o login"
				class="form-control">
			</div>
		</div>

		<div class="control-group">
			<label class="control-label">
			Senha:
			</label>
			<div class="controls">
				<input type="password" 
				name="senha" class="form-control"
				required data-validation-required-message="Preencha sua senha">
			</div>
		</div>


		<button type="submit" 
		class="btn btn-success">
			Efetuar Login
		</button>
	</form>
</div>

</body>
</html>



