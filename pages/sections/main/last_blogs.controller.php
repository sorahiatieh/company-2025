<?php
  $blog=new DB_BLOG();
  $setting=new DB_SETTING();
  
  $CP['ListOfBlogs']=$blog->setWheres(array(
      "enable"=>1
  ))->getList(4);
  $CP['servicesBoxTitle']=$setting->getSetting('blog_title');
?>
