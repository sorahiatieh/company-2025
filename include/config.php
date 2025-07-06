<?php
	defined("_AST") or die("Access denied");
	
	date_default_timezone_set("Asia/Tehran");
	
	$mysqli=new mysqli("localhost","root","","fashion_shop");
	
	if($mysqli->connect_errno)
	    die("Error in connect DB");
	
	
	$mysqli->set_charset('utf8');
	DB::setConnection($mysqli);
	mb_internal_encoding("UTF-8");
?>