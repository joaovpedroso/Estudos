<?php
	include "conecta.php";
?>
<html>

<head>
	<title>Validacao do Login</title>
	<script type="text/javascript">
		function loginsuccessfully(){
			setTimeout("window.location='inicial.php'",100);
		};
		function loginfailed(){
			setTimeout("window.location='index.php'",100);
		};
	</script>
</head>

<body>
	<?php
		$login = $_POST["login"];
		$senha = $_POST["senha"];

		$sql = "SELECT * FROM usuarios WHERE usuario = '$login' and senha = '$senha' and id_status = '1' ";
		$resultado = mysqli_query($con, $sql) or die (mysqli_error());
		$linha = mysqli_num_rows($resultado);

		if($linha > 0){
			session_start();
			$_SESSION["login"]=$_POST["login"];
			$_SESSION["senha"]=$_POST["senha"];

			echo "<script>alert('Login efetuado com sucesso !');</script>";
			echo "<script>loginsuccessfully()</script>";
		}else{
			echo "<script>alert('Usuario / Senha incorreto ou Desativado');</script>";
			echo "<script>loginfailed()</script>";
		}

	?>
</body>

</html>	