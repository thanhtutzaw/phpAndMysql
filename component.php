<?php 
 	function inputElement($icon,$placeholder,$name){

 		$element ="

 		<div class='input-group mb-2 ' >
			<div class='input-group-prepend'>
				<div class='input-group-text bg-warning'>
				$icon
				</div>
			</div>
				<input type='text' class='form-control' placeholder='$placeholder' name='$name'>

		</div>





 		 ";

 		echo $element;
 	}

 	function buttonElement($style,$icon,$name,$id,$title)
	{
		$btn = "
			<button class=\"$style\" title=\"$title\" name='$name' id='$id'>$icon</button>
		";

		echo $btn;
	}





 ?>