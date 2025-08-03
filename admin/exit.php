<?php
	define("_AST",1);
	require "../include/inc.php";
	
	$session->userLogout();
	
	header('location:login.php');