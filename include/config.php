<?php
	date_default_timezone_set("Asia/Tehran");
	
	$mysqli=new mysqli("localhost","root","","company-2025");
	
	if($mysqli->connect_errno)
	    die("Error in connect DB");
	
	$mysqli->set_charset('utf8');
	mb_internal_encoding("UTF-8");
?>