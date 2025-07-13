<?php
  $products_db=new DB_PRODUCT();
  $setting=new DB_SETTING();
  
  $CP['ListOfProducts']=$products_db->setLimit(4)->getList()->run();
?>
