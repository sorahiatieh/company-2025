<?php
	if(!isset($_GET['id'])){
		die('404');
	}
		$blog_db=new DB_BLOG();
	
		$id=secure($_GET['id']);
		
		$blogDetails=$blog_db->getBlogDetails($id);
		if(empty($blogDetails)){
				die('404');
		}
			
		if($blogDetails['enable']==0){
			die('404');
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