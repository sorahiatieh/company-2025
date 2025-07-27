<?php
  $slidere=new DB_SLIDER();
  
  
  Head::addScript("assets/js/owl.carousel.js");
  
  Head::addStylesheet("assets/css/owl.carousel.css");
  Head::addStylesheet("assets/css/owl.theme.css");
  
  
  $CP['ListOfSliders']=$slidere->setWheres(array(
      "enable"=>1
  ))->getList()->run();
?>
