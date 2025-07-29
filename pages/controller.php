<?php
	defined("_AST") or die("Access denied");
	$setting_db=new DB_SETTING();
	
	SiteBase::setSiteTitle($setting_db->getSetting('site_title'));
	SiteBase::setSiteTitle($setting_db->getSetting('site_keywords'));
	SiteBase::setSiteTitle($setting_db->getSetting('site_description'));
	
	
	Head::addScript("assets/js/jquery-3.0.0.min.js");
	Head::addScript("assets/js/bootstrap.min.js");
	Head::addScript("assets/js/script.js");
	
	Head::addStylesheet("assets/css/bootstrap.min.css");
	Head::addStylesheet("assets/css/font-icon.css");
	Head::addStylesheet("assets/css/font-awesome.min.css");
	Head::addStylesheet("assets/css/style.min.css");
	
	
	
	if(!isset($_GET['page']))
		$_GET['page']="main";
	
	
	$pagename =secure($_GET['page']);
	
	$page_db=new DB_PAGE();
	
	try{
		if(!Validator::is_az09_($pagename)){
			throw new NotFound();
		}
		
		$pageDetails=$page_db->setWheres(array(
			"name"=>$pagename
		))->getDetails()->run();
		
		
		if(empty($pageDetails)){
			throw new NotFound();
		}
		
		SiteBase::setPageName($pagename);
		
		SiteBase::setSiteTitle($pageDetails['seo_title']);
		SiteBase::setSiteKeywords($pageDetails['keywords']);
		SiteBase::setSiteDescription($pageDetails['description']);
		
		//For Public Page
		SiteBase::setData("_page_details",$pageDetails);
		
		if($pageDetails['custom_page']==1){
			$filename=SECTIONS.$pageDetails['name'].'.controller.php';
			
			if(file_exists($filename)){
				SiteBase::setIsCustomPage(true);
				
				require $filename;
			}
			$filename=SECTIONS.$pageDetails['name'].'.view.php';
			if(SiteBase::getIsCustomPage() && file_exists($filename)){
				SiteBase::setHasView(true);
			}
		}
	}
	catch(Exception $e){
		header('HTTP/1.0 404 Not Found');
		SiteBase::setSiteTitle("یافت نشد!");
		SiteBase::setHasView(true);
		SiteBase::setPageName("404");
	}
	
	require "pages/requires/header.controller.php";
	/*echo "<pre>";
	print_r(Base::$data);
	echo "</pre>";
	exit;*/
?>