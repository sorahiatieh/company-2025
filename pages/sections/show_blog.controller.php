<?php
	if(!isset($_GET['id'])){
		die('404');
	}
		$blog_db=new DB_BLOG();
	
		$id=secure($_GET['id']);
		
		if(!Validator::isNumber($id)){
			throw new NotFounf();
		}
		$blogDetails=$blog_db->getBlogDetails($id);
		if(empty($blogDetails)){
			throw new NotFounf();
		}
			
		if($blogDetails['enable']==0){
			throw new NotFounf();
		}
		
		Base::setSiteTitle($blogDetails['title']);
		Base::setSiteKeywords($blogDetails['keywords']);
		Base::setSiteDescription($blogDetails['description']);
		
	
	$CP['BlogDetails']=$blogDetails;
	Base::setData("show_blog",$CP);
	
	
	
	/*echo "<pre>";
	print_r($CP);
	echo "</pre>";
	exit;*/
?>