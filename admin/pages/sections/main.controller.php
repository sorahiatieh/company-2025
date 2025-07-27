<?php
	$CP=array();
	
	Base::setSiteTitle($setting_db->getSetting('site_title'));
	
	// اسلایدر
	require SECTIONS."main/slider.controller.php";
	// بخش سرویس ها
	require SECTIONS."main/services.controller.php";
	// آخرین نمونه کارها
	require SECTIONS."main/portfolio.controller.php";
	// آخرین های وبلاگ
	require SECTIONS."main/last_blogs.controller.php";
	//چرا باید شرکت ما را انتخاب نمایید
	require SECTIONS."main/why_choice.controller.php";
	// شعار شرکت
	require SECTIONS."main/slogan.controller.php";
	
	
	Base::setData("main",$CP);
	
	//Head::addScript("assets/js/jquery.nivo.slider.js");
	
	
	/*echo "<pre>";
	print_r($CP);
	echo "</pre>";
	exit;*/
?>