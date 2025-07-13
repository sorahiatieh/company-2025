<?php
  $portfolio=new DB_PORTFOLIO();
  $setting=new DB_SETTING();
  
  $CP['ListOfPortfolioes']=$portfolio->setLimit(4)->getList()->run();
  $CP['getBoxTitle']=$setting->getSetting('portfolio_title');
?>
