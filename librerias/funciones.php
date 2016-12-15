<?php
	function parametro_plantilla($variable){
		if(isset($GLOBALS[$variable])){
			echo $GLOBALS[$variable];
		}else{
			echo "Sin dato cargado". $variable;
		}
	}


	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}