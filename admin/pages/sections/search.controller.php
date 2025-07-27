<?php
	$blog_db=new DB_BLOG();
	
	if(!isset($_GET['search'])){
		throw new NotFound();
	}
	
	$search=$_GET['search'];
	$where=array(
		"enable"=>1
	);
	$where['title']=$search;
	$items=$blog_db->search($search)->run();
	
	for($i=0;$i<count($items);$i++){
		$item=$items[$i];
		
		$item['ImageURL']="assets/img/blog/no-pic.jpg";
		if(file_exists(dirname(__FILE__).'/../../assets/img/blog/'.$item['id'].'.jpg')){
			$item['ImageURL']="assets/img/blog/".$item['id'].'.jpg';
		}
		
		
		$items[$i]=$item;
	}
	$CP['Items']=$items;
	
	Base::setData("blog",$CP);
	
	
	
	
	echo "<pre>";
	print_r($CP);
	echo "</pre>";
	exit;
?>