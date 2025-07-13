<?php
  $blog=new DB_BLOG();
  $setting=new DB_SETTING();
  
  $CP['ListOfBlogs']=$blog->setWheres(array(
      "enable"=>1
  ))->setLimit(4)->getList()->run();
  $CP['blogBoxTitle']=$setting->getSetting('blog_title');
?>
