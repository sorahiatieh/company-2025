<?php
	if(!isset($_GET['id'])){
		Base::getSiteTitle("یافت نشد!");
	}else{
		$project_db=new DB_PORTFOLIO();
		
		$id=secure($_GET['id']);
		$projectDetails=$project_db->getPortfolioDetails($id);
		if(!empty($projectDetails)){
			if($projectDetails['enable']==0){
				die('404');
			}else{
				Base::setSiteTitle("پروژه: ".$projectDetails['title']);
				Base::setSiteKeywords($projectDetails['keywords']);
				Base::setSiteDescription($projectDetails['description']);
			}
		}else
			Base::getSiteTitle("یافت نشد!");
	}
?>
