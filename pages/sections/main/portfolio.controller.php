<?php
  $portfolio=new DB_PORTFOLIO();
  $setting=new DB_SETTING();
  
  $CP['ListOfPortfolioes']=$portfolio->setLimit(4)->getList()->run();
  //$CP['servicesBoxTitle']=$setting->getSetting('portfolio_title');
?>
