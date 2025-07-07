<?php
	$CP=array();
	
	Base::setSiteTitle($setting_db->getSetting('site_title'));
	
	// اسلایدر
	require SECTIONS."main/slider.controller.php";
	
	// آخرین نمونه کارها
	require SECTIONS."main/products.controller.php";
	// آخرین های وبلاگ
	require SECTIONS."main/last_blogs.controller.php";
	
	
	Base::setData("main",$CP);
	
	//Head::addScript("assets/js/jquery.nivo.slider.js");
	
	
	/*echo "<pre>";
	print_r($CP);
	echo "</pre>";
	exit;*/
?>