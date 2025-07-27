<?php
  $setting=new DB_SETTING();
  $CP['SloganDetails']=json_decode($setting->getSetting("main_slogan"),true);
?>
