<?php
	defined("_AST") or die("Access denied");
	function secure($input)
	{
		global $mysqli;
		
		$input=str_ireplace('ي','ی',$input);
		$input=str_ireplace('ك','ک',$input);
		
		
		$input=stripslashes($input);
		
		$input=$mysqli->real_escape_string($input);
		
		return $input;
	}
	
	function getRealIP(){
		return $_SERVER['REMOTE_ADDR'];
	}
	function text2url($text,$extention='.html'){
		$text=preg_replace('/\s+/','-',$text);
		
		
		return '-'.$text.$extention;
	}
?>
