<?php
	$CP=array();
	
	
	
	Head::addStylesheet("assets/css/lightgallery.css","screen");
	Head::addStylesheet("assets/css/nivo-slider.css");
	
	
	Head::addScript("assets/js/lightgallery.min.js");
	Head::addScript("assets/js/jquery.nivo.slider.js");
	
	
	Base::setData("gallery",$CP);
 
	/*echo "<pre>";
	print_r($CP);
	echo "</pre>";
	exit;*/
?>