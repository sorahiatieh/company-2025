<?php
  $service=new DB_SERVICE();
  $setting=new DB_SETTING();
  
  $CP['ListOfServices']=$service->getList();
  $CP['servicesBoxTitle']=$setting->getSetting('service_title');
?>
