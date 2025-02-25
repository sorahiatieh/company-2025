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
		if(!empty($pageDetails)){
			if($pageDetails['custom_page']==1){
				switch($pagename){
					case 'show_blog':
						$blog_db=new DB_BLOG();
						if(!isset($_GET['id'])){
							Base::getSiteTitle("یافت نشد!");
						}else{
							$id=secure($_GET['id']);
							$blogDetails=$blog_db->getBlogDetails($id);
							if(!empty($blogDetails)){
								Base::setSiteTitle($blogDetails['title']);
								Base::setSiteKeywords($blogDetails['keywords']);
								Base::setSiteDescription($blogDetails['description']);
							}else
								Base::getSiteTitle("یافت نشد!");
						}
						break;
					case 'project_details':
						$project_db=new DB_PORTFOLIO();
						if(!isset($_GET['id'])){
							Base::getSiteTitle("یافت نشد!");
						}else{
							$id=secure($_GET['id']);
							$projectDetails=$project_db->getPortfolioDetails($id);
							if(!empty($projectDetails)){
								Base::setSiteTitle($projectDetails['title']);
								Base::setSiteKeywords($projectDetails['keywords']);
								Base::setSiteDescription($projectDetails['description']);
							}else
								Base::getSiteTitle("یافت نشد!");
						}
						break;
					
					default:
						Base::setSiteTitle($pageDetails['title']);
						Base::setSiteKeywords($pageDetails['keywords']);
						Base::setSiteDescription($pageDetails['description']);
				}
			}else{
				Base::setSiteTitle($pageDetails['title']);
				Base::setSiteKeywords($pageDetails['keywords']);
				Base::setSiteDescription($pageDetails['description']);
			}
			
		}else
			Base::getSiteTitle("یافت نشد!");
	}
?>