<?php
  $setting_db=new DB_SETTING();
  $CP['whyDetails']=json_decode($setting_db->getSetting("main_why"),true);
  
  //var_dump($whyDetails);
?>
