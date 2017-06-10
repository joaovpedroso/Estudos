<?php
	/**
	* 
	*/
	class BootLayout 
	{
		
		public function startDiv($id, $classe){
			echo "<div id='{$id}' class='{$classe}'>";
		}

		public function endDiv(){
			echo "</div>";
		}

		public function showTag($tag,$conteudo){
			echo "<{$tag}>";
			echo $conteudo;
			echo "</{$tag}>";
		}

		public function circleImage($img,$text,$url,$col,$width,$height){
			echo "<style> .icone div{text-align:center;
				padding:1em;}</style>";
			echo "<div class='{$col} icone'>";
			echo "<div><a href='{$url}'>";
			echo "<img src='{$img}' class='img-circle' style='width:{$width} height:{$height}'>";
			echo "<h3>{$text}</h3>";
			echo "</a></div></div>";
		}
	}


?>