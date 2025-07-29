<?php
	$CP=array();
	
	$product_db=new DB_PRODUCT();
	$CP['List']=$product_db->GetList()->run();
	
	
	echo '<pre>';
	print_r($CP);
	echo '</pre>';
	exit;
	
	AdminBase::setPageData(AdminBase::getPageName(),AdminBase::getSubPage(),$CP);
	
?>


