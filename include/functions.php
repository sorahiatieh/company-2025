<?php
	
	function secure($input)
	{
		global $mysqli;
		
		$input=str_ireplace('ي','ی',$input);
		$input=str_ireplace('ك','ک',$input);
		
		
		$input=stripslashes($input);
		
		$input=$mysqli->real_escape_string($input);
		
		return $input;
	}
?>
