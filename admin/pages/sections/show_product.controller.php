<?php
	if(!isset($_GET['id'])){
		throw new NotFound();
	}
	$project_db=new DB_PORTFOLIO();
	
	$id=secure($_GET['id']);
	
	$projectDetails=$project_db->setWheres(array(
		"id"=>$id
	))->getDetails()->run();
	
	if(empty($projectDetails))
		throw new NotFound();
		
	if($projectDetails['enable']==0)
		throw new NotFound();
			
	SiteBase::setSiteTitle("پروژه: ".$projectDetails['title']);
	SiteBase::setSiteKeywords($projectDetails['keywords']);
	SiteBase::setSiteDescription($projectDetails['description']);
	
?>
