<?php
	if(!isset($_GET['id'])){
		die('404');
	}
		$blog_db=new DB_BLOG();
	
		$id=secure($_GET['id']);
		
		if(!Validator::isNumber($id)){
			throw new NotFound();
		}
		$blogDetails=$blog_db->setWheres(array(
			"id"=>$id,
			"enable"=>1
		))->getDetails()->run();
		
		if(empty($blogDetails)){
			throw new NotFound();
		}
		
		
		SiteBase::setSiteTitle($blogDetails['title']);
		SiteBase::setSiteKeywords($blogDetails['keywords']);
		SiteBase::setSiteDescription($blogDetails['description']);
		
	
		$CP['BlogDetails']=$blogDetails;
		SiteBase::setData("show_blog",$CP);
	
	
	
		/*echo "<pre>";
		print_r($CP);
		echo "</pre>";
		exit;*/
?>