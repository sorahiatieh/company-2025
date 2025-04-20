<?php
	$blog_db=new DB_BLOG();
	$items=$blog_db->getList(array(
		"enable"=>1
	),8);
	
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
	
	
	
	
/*	echo "<pre>";
	print_r($CP);
	echo "</pre>";
	exit;*/
?>