<?php
  $slidere=new DB_SLIDER();
  
  
  Head::addScript("assets/js/jquery.nivo.slider.js");
  
  Head::addStylesheet("assets/css/themes/default/default.css","screen");
  Head::addStylesheet("assets/css/nivo-slider.css");
  
  $CP['ListOfSliders']=$slidere->getList();
?>
