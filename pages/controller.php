<?php
	defined("_AST") or die("Access denied");
	$setting_db=new DB_SETTING();
	
	Base::setSiteTitle($setting_db->getSetting('site_title'));
	Base::setSiteTitle($setting_db->getSetting('site_keywords'));
	Base::setSiteTitle($setting_db->getSetting('site_description'));
	
	if(isset($_GET['page'])){
		$pagename = $_GET['page'];
		
		$page_db=new DB_PAGE();
		
		try{
			if(!Validator::is_az09_($pagename)){
				throw new NotFounf();
			}
			$pageDetails=$page_db->getPageDetails($pagename);
			
			if(empty($pageDetails)){
				throw new NotFounf();
			}
			
			Base::setPageName($pagename);
			
			Base::setSiteTitle($pageDetails['title']);
			Base::setSiteKeywords($pageDetails['keywords']);
			Base::setSiteDescription($pageDetails['description']);
			
			//For Public Page
			Base::setData("_page_details",$pageDetails);
			
			if($pageDetails['custom_page']==1){
				$filename=SECTIONS.$pageDetails['name'].'.controller.php';
				
				if(file_exists($filename)){
					Base::setIsCustomPage(true);
					
					require $filename;
				}
				$filename=SECTIONS.$pageDetails['name'].'.view.php';
				if(Base::getIsCustomPage() && file_exists($filename)){
					Base::setHasView(true);
				}
			}
		}
		catch(Exception $e){
		
		}
	}
	
	/*echo "<pre>";
	print_r(Base::$data);
	echo "</pre>";
	exit;*/
?>