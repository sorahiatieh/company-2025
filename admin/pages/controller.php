<?php
	defined("_AST") or die("Access denied");
	
	if(!isset($_GET['page'],$_GET['sub'])){
		$_GET['page']="base";
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
		
		AdminBase::setPageName($pagename);
		AdminBase::setSubPage($sub_page);
		
		$filename=dirname(__FILE__).'/sections/'.$pagename.'/'.$sub_page.'controller.php';
		if(!file_exists($filename))
			throw new NotFound();
		
		require $filename;
	}
	catch(Exception $e){
		header('HTTP/1.0 404 Not Found');
		
		AdminBase::setSiteTitle("یافت نشد!");
		AdminBase::setPageName("base");
		AdminBase::setSubPage("404");
	}
	
	
	echo "<pre>";
	echo AdminBase::getPageName();
	echo AdminBase::getSubPage();
	print_r(AdminBase::$data);
	echo "</pre>";
	exit;
?>