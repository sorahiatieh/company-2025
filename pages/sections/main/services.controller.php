<?php
  $service=new DB_SERVICE();
  $setting=new DB_SETTING();
  
  $CP['ListOfServices']=$service->setWheres(array(
      "enable"=>1
  ))->getList();
  
  $CP['servicesBoxTitle']=$setting->getSetting('service_title');
?>
