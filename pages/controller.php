<?php
	defined("_AST") or die("Access denied");
	$setting_db=new DB_SETTING();
	
	Base::setSiteTitle($setting_db->getSetting('site_title'));
	Base::setSiteTitle($setting_db->getSetting('site_keywords'));
	Base::setSiteTitle($setting_db->getSetting('site_description'));
	
	if(isset($_GET['page'])){
		$pagename = $_GET['page'];
		
		$page_db=new DB_PAGE();
		
		$pageDetails=$page_db->getPageDetails($pagename);
		
		if(empty($pageDetails)){
			die('404');
		}
		Base::setSiteTitle($pageDetails['title']);
		Base::setSiteKeywords($pageDetails['keywords']);
		Base::setSiteDescription($pageDetails['description']);
		
		if($pageDetails['custom_page']==1){
			$filename=PAGE_PATH.'controller/'.$pageDetails['name'].'.php';
			if(file_exists($filename)){
				require $filename;
			}
		}
		/*if(!empty($pageDetails)){
		
			
		}else
			Base::getSiteTitle("یافت نشد!");
		*/
	}
?>