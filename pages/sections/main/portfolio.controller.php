<?php
  $portfolio=new DB_PORTFOLIO();
  $setting=new DB_SETTING();
  
  $CP['ListOfPortfolioes']=$portfolio->getList(4);
  $CP['servicesBoxTitle']=$setting->getSetting('portfolio_title');
?>
