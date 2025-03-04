<?php
	$portfolio_db=new DB_PORTFOLIO();
	$items=$portfolio_db->getList(10);
	
	for($i=0;$i<count($items);$i++){
		$item=$items[$i];
		
		$item['ImageURL']="assets/img/portfolio/no-pic.jpg";
		if(file_exists(dirname(__FILE__).'/../../assets/img/portfolio/'.$item['id'].'.jpg')){
			$item['ImageURL']="assets/img/portfolio/".$item['id'].'.jpg';
		}
		
		
		$items[$i]=$item;
	}
	$CP['Items']=$items;
	
	Base::setData("projects",$CP);
	
	
	/*	echo "<pre>";
		print_r($CP);
		echo "</pre>";
		exit;*/
?>