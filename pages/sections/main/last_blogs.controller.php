<?php
  $blog=new DB_BLOG();
  $setting=new DB_SETTING();
  
  $CP['ListOfBlogs']=$blog->getList(5);
  $CP['servicesBoxTitle']=$setting->getSetting('blog_title');
?>
