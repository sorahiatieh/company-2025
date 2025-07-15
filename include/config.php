<?php
	defined("_AST") or die("Access denied");
	session_start();
	
	date_default_timezone_set("Asia/Tehran");
	
	$mysqli=new mysqli("localhost","root","","company-2025");
	
	if($mysqli->connect_errno)
	    die("خطا در اتصال به دیتابیس");
	
	
	$mysqli->set_charset('utf8');
	DB::setConnection($mysqli);
	mb_internal_encoding("UTF-8");
?>