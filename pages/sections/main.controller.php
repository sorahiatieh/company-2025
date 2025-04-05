<?php
	$CP=array();
	
	Base::setData("main",$CP);
	Head::addStylesheet("assets/css/lightgallery.css","screen");
	
	
	Head::addScript("assets/js/lightgallery.min.js");
	Head::addScript("assets/js/jquery.nivo.slider.js");
	/*echo "<pre>";
	print_r($CP);
	echo "</pre>";
	exit;*/
?>