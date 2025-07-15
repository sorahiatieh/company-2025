<?php
	define("_AST",1);
	require "../../include/inc.php";
	
	$respons=new Ajax();
	
	try{
		if(!isset(
			$_POST['username'],
			$_POST['password']
		)){
			$respons->Text="خطا در ورودی!";
			throw $respons;
		}
	}
	catch(Ajax $e){
		$respons->makeOutput();
	}
	finally{
		$respons->makeOutput();
	}
	?>