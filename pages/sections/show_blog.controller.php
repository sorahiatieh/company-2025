<?php
	if(!isset($_GET['id'])){
		die('404');
	}
		$blog_db=new DB_BLOG();
	
		$id=secure($_GET['id']);
		
		if(!Validator::isNumber($id)){
			throw new NotFound();
		}
		$blogDetails=$blog_db->getBlogDetails($id);
		if(empty($blogDetails)){
			throw new NotFound();
		}
			
		if($blogDetails['enable']==0){
			throw new NotFound("این خبر غیر فعال می باشد!");
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