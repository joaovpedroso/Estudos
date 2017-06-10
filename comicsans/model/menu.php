<?php
	
	/**
	* 
	*/
	class Menu 
	{
		private $menu;
		function __construct($get)
		{
			if(!empty($get)){
				$this->menu=$get;
			}

			return $this->menu;
		}
		function show(){

			if($this->menu==null){
				include("view/home.php");
			}else{
				$url=$this->menu;
				include("view/$url.php");
			}
		}
	}

?>