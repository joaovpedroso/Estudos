<?php

	/**
	* 
	*/
	class BootForm extends BootLayout
	{
		public function form($name,$id,$action,$method,$others){

			echo "<form name='{$name}' id='{$id}' action='{$action}' method='{$method}' {$others}>";
		}
		public function endForm(){
			echo "</form>";
		}
		public function input($type, $name,$id, $value,$others,$label_for,$label){

			parent::startDiv("label","control-form");
			echo "<label for='{$label_for}'>{$label}</label>";
				parent::startDiv("input","controls");
					echo "<input type='{$type}' name='{$name}' id='{$id}' value='{$value}' {$others} class='form-control'>";
				parent::endDiv();


			parent::endDiv();


		}

		public function radioList($label,$value,$name,$cols){

				echo "<div class='radio ".$cols."'>

						<label class='radio-inline'><input type='radio' name='".$name."' value='".$value."'>".$label."</label>
					</div>";

				
		}
		public function tdList($td,$num_cols){

				echo "<div class='".$num_cols."'>".$td."</div>";

				
		}
		
		
	}

?>