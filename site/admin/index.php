<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Painel do Administrador</title>
  	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/estiloAdmin.css">
  </head>

<body>

  <div id="login">
    <h1 style="text-align:center; font: 25px Tahoma, Arial, Verdana">Painel - Login</h1>

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
        <input type="password" name="senha" class="form-control" required data-validation-required-message="Preencha sua Senha">
      </div>
      </div>

      <hr>
      <button type="submit" class="btn btn-success">
        Efetuar Login
      </button>
    </form>
  </div>

</body>
</html>