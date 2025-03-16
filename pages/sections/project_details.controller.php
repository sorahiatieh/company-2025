<?php
	if(!isset($_GET['id'])){
		throw new NotFounf();
	}
	$project_db=new DB_PORTFOLIO();
	
	$id=secure($_GET['id']);
	
	$projectDetails=$project_db->getPortfolioDetails($id);
	
	if(empty($projectDetails))
		throw new NotFounf();
		
	if($projectDetails['enable']==0)
		throw new NotFounf();
			
	Base::setSiteTitle("پروژه: ".$projectDetails['title']);
	Base::setSiteKeywords($projectDetails['keywords']);
	Base::setSiteDescription($projectDetails['description']);
	
?>
