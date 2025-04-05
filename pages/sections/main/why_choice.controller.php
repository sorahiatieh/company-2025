<?php
  $setting=new DB_SETTING();
  $CP['whyDetails']=json_decode($setting->getSetting("main_why"),true);
  //var_dump($whyDetails);
?>
