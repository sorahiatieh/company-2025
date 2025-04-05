<?php
  $setting=new DB_SETTING();
  $CP['sloganDetails']=json_decode($setting->getSetting("main_slogan"),true);
?>
