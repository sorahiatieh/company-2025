<?php
	$CP=array();
	$portfolio_db=new DB_PORTFOLIO();
	
	$items=$portfolio_db->setWheres(array(
		"enable"=>1
	))->setLimit(8)->getList(10)->run();
	
	for($i=0;$i<count($items);$i++){
		$item=$items[$i];
		
		$item['ImageURL']="assets/img/portfolio/no-pic.jpg";
		if(file_exists(dirname(__FILE__).'/../../assets/img/portfolio/'.$item['id'].'.jpg')){
			$item['ImageURL']="assets/img/portfolio/".$item['id'].'.jpg';
		}
		
		
		$items[$i]=$item;
	}
	
	
	Base::setPageDetails("title",count($items)." پروژه آخر");
	$CP['Items']=$items;
	
	Base::setData("projects",$CP);
	
	
	/*	echo "<pre>";
		print_r($CP);
		echo "</pre>";
		exit;*/
?>