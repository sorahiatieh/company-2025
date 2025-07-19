<?php
	$CP=array();
	$product_db=new DB_PRODUCT();
	
	$items=$product_db->setWheres(array(
		"enable"=>1
	))->setLimit(8)->getList(10)->run();
	
	for($i=0;$i<count($items);$i++){
		$item=$items[$i];
		
		$item['ImageURL']="assets/img/product/no-pic.jpg";
		if(file_exists(dirname(__FILE__).'/../../assets/img/product/'.$item['id'].'.jpg')){
			$item['ImageURL']="assets/img/product/".$item['id'].'.jpg';
		}
		
		
		$items[$i]=$item;
	}
	
	
	Base::setPageDetails("title",count($items)." محصول آخر");
	$CP['Items']=$items;
	
	Base::setData("products",$CP);
	
	
	/*	echo "<pre>";
		print_r($CP);
		echo "</pre>";
		exit;*/
?>