<?php
	defined("_AST") or die("Access denied");
	
	if(!isset($_GET['page'],$_GET['sub'])){
		$_GET['page']="main";
		$_GET['sub']="dashboard";
	}
	
	$pagename =secure($_GET['page']);
	$sub_page =secure($_GET['sub']);
	
	try{
		if(!Validator::is_az09_($pagename)){
			throw new NotFound();
		}
		if(!Validator::is_az09_($sub_page)){
			throw new NotFound();
		}
	}
	catch(Exception $e){
		header('HTTP/1.0 404 Not Found');
		
		Base::setSiteTitle("یافت نشد!");
		Base::setHasView(true);
		Base::setPageName("404");
	}
	
	require "pages/requires/header.controller.php";
	/*echo "<pre>";
	print_r(Base::$data);
	echo "</pre>";
	exit;*/
?>