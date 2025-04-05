<?php
  $blog=new DB_SERVICE();
  $setting=new DB_SETTING();
  
  $CP['ListOfBlogs']=$blog->getList(4);
  $CP['servicesBoxTitle']=$setting->getSetting('blog_title');
?>
