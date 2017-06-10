<?php
	/**
	* 
	*/
	class Crud extends Conexao
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function insert($tabela,$post){
			foreach ($post as $key => $value) {
				$myPost .="'{$value}',";
			}

			$ins_post=substr($myPost,0,-1);
			$sql="INSERT INTO {$tabela} VALUES(DEFAULT,{$ins_post})";
			
			//teste sql abaixo
			// echo $sql;

			$this->query($sql);
		}

	}

?>