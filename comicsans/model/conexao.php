<?php
	
	class Conexao extends mysqli{

		public function __construct(){
			parent::__construct("localhost","root","","comicsans");

			if(mysqli_connect_error()){
				die("Erro de Conexao(".mysqli_connect_error().")".mysqli_connect_error());
			}


		}
	}


?>